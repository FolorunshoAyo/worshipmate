<?php
// UserController.php
class AuthController {
    function checkUserSession($page = ""){
        global $base_url, $userModel;

        if(
            $page === "signin" ||
            $page === "signup" ||
            $page === "forgot-password"){
            if(isset($_SESSION['user_id'])){
                $user = $userModel->getUserById($_SESSION['user_id']);

                if(!$user['account_status']){
                    // Send verification email
                    $this->sendVerificationEmail($user['email']);

                    header("Location: " . $base_url . "verify-email");
                }else{
                    header("location:" . $base_url . "user/");
                }
            }
        }elseif($page === "verify-email"){
            if(isset($_SESSION['user_id'])){
                $user = $userModel->getUserById($_SESSION['user_id']);
                
                if(!$user['account_status']){
                    if(!$_SESSION['vcode']){
                        // Send verification email
                        $this->sendVerificationEmail($user['email']);
                    }
                }else{
                     header("location:" . $base_url . "user/");
                }
            }else{
                header("location:" . $base_url . "signin");
            }
        }elseif($page === "verify-reset-code" ||
        $page === "reset-password"){
            if(isset($_SESSION['email'])){
                //STAY ON PAGE
            }else{
                if($_SESSION['user_id']){
                    header("location:" . $base_url . "user/");
                }else{
                    header("Location: " . $base_url . "signin");
                }
            }
        }else{
            if($page === "start"){
                if(!isset($_SESSION['user_id'])){
                    header("location:" . $base_url . "signin");
                }else{
                    header("location:" . $base_url . "user/");
                }
            }else{
                if(!isset($_SESSION['user_id'])){
                    header("location:" . $base_url . "signin");
                }
            }
        }
    }

    public function rememberLoginCredentials($user_id){
        global $rememberMeModel;

        $remember_me_token = bin2hex(random_bytes(32));
        $expiration_date = time() + (86400 * 30);
       
         // STORE token into database
        if($rememberMeModel->createToken($user_id, $remember_me_token, date("Y-m-d H:i:s", strtotime("+ 30 days")))){
            // Set cookies to store remember_me_token in user device
            setcookie('remember_me_token', $remember_me_token, $expiration_date, "/");

            return true;
        }else{
            return false;
        }
    }

    public function forgetRememeberMeToken($user_id, $token){
        global $rememberMeModel;
        
        if($rememberMeModel->deleteToken($user_id, $token)) setcookie('remember_me_token', '', time() - 3600, '/');
    }

    public function hasRememberMeToken(){
        return isset($_COOKIE['remember_me_token']);
    }

    public function validateRememberMeToken($token){
        global $rememberMeModel, $userModel, $base_url;

        print_r($rememberMeModel);
        $token_details = $rememberMeModel->getTokenByToken($token);

        if($token_details){
            // CHECK IF ALMOST EXPIRED (5 days before or less)
            $almostExpired = getDaysDifference($token_details['expiration_date'],date("Y-m-d H:i:s", time())) <= 5;

            echo $almostExpired;

            if($almostExpired){
                $this->renewRememberMeToken($token_details['user_id']);
            }

            $user = $userModel->getUserById($token_details['user_id']);

            // The user is successfully logged in
            // You can set session variables or perform any additional actions here
            $_SESSION['user_id'] = $user['user_id'];

            if(!$user['account_status']){
                header("Location: " . $base_url . "verify-email");
            }else{
                header("Location: " . $base_url . "user/");
            }
        }
    }

    public function renewRememberMeToken($user_id){
        global $rememberMeModel;

        $token = bin2hex(random_bytes(32));
        $new_expiration_date = date("Y-m-d H:i:s", strtotime("+ 30 days"));
        
        if($rememberMeModel->updateToken($user_id, $token, $new_expiration_date)){
            // Set cookies to store remember_me_token in user device
            setcookie('remember_me_token', $token, $new_expiration_date, "/");
        }
    }

    public function loginUser() {
        global $userModel;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $remember_me = isset($_POST['remember_me'])? "1" : "0";

            // Validate the email and password (you may want to add more validation here)
            if (empty($email) || empty($password)) {
                return array("success" => 0, "error_message" => "Email and password cannot be empty");
            }

            // Check if the user exists in the database
            $user = $userModel->getUserByEmail($email);

            if (!$user) {
                return  array("success" => 0, "error_message" => "User not found. Please check your email and password.");
            }

            // Check if the provided password matches the hashed password in the database

            if (password_verify($password, $user['password'])) {
                if($remember_me){
                    if(!$this->rememberLoginCredentials($user['user_id'])){
                        return array("success" => 0, "error_message" => "Remember me feature could not be activated");
                    }
                }

                // Check if the account is verified
                if (!$user['account_status']) {
                    // The user is successfully logged in
                    // You can set session variables or perform any additional actions here
                    $_SESSION['user_id'] = $user['user_id'];

                     // Send verification email
                     $random_code = $this->sendVerificationEmail($email);

                    return  array("success" => 1, "redirect" => "verify-email", "auth_generated_code" => $random_code);
                }else{
                    // You can set session variables or perform any additional actions here
                    $_SESSION['user_id'] = $user['user_id'];
                    return array("success" => 1);
                }
            }else{
                return array("success" => 0, "error_message" => "Incorrect password. Please check your email and password.");
            }

        }
    }

    public function registerUser() {
        global $userModel;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $password = $_POST['pwd'];
            $confirmPassword = $_POST['cpwd'];

            // Validate form data
            $errors = array();

            if (empty($firstName)) {
                $errors[] = "First name is required.";
            }

            if (empty($lastName)) {
                $errors[] = "Last name is required.";
            }

            if (empty($email)) {
                $errors[] = "Email is required.";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format.";
            }

            if (empty($dob)) {
                $errors[] = "Date of birth is required.";
            } elseif (!validateDate($dob, 'Y-m-d')) {
                $errors[] = "Invalid date of birth format. Use YYYY-MM-DD.";
            }

            if (empty($dob)) {
                $errors[] = "Gender is required.";
            }

            if (empty($password)) {
                $errors[] = "Password is required.";
            } elseif (strlen($password) < 6) {
                $errors[] = "Password should be at least 6 characters long.";
            } elseif ($password !== $confirmPassword) {
                $errors[] = "Passwords do not match.";
            }

            if (count($errors) === 0) {
                // All form data is valid, proceed with user registration
                $existingUser = $userModel->getUserByEmail($email);

                if($existingUser){
                    return array("success" => 0, "error_message" => "Email already exists. Please use a different email or try logging in.");
                }

                $gender = $gender === "male"? "M" : "F";
                
                $userRegistered = $userModel->registerUser($firstName, $lastName, $email, password_hash($password, PASSWORD_BCRYPT), $dob, $gender);

                if ($userRegistered) {
                    // STORE USER SESSION
                    $_SESSION['user_id'] = $userRegistered;

                    // Send verification email
                    $random_code = $this->sendVerificationEmail($email);

                    return array("success" => 1, 'generated_auth_code' => $random_code);
                } else {
                    return array("success" => 0, "error_message" => "Unable to register user");
                }
            } else {
                // implode("<br>", $errors);
                return array("success" => 0, "error_message" => "Validation Error");
            }
        }
    }

    public function sendVerificationEmail($email){
        $random_code = rand(000000,999999);

        $_SESSION['vcode'] = $random_code;

        // send_email($email, "Worshipmate - Email Verification", "<p>Your verification code is - $random_code </p>");

        return $random_code;
    }

    public function confirmVerificationCode($user_id, $code){
        global $userModel;

        if($_SESSION['vcode'] == $code){
            if($userModel->updateAccountStatus($user_id, "1")){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function sendPasswordResetCode($email){
        global $userModel;

        $random_code = rand(000000,999999);

        $_SESSION['rcode'] = $random_code;

        $user_id = $userModel->getUserByEmail($email)['user_id'];

        $link = $this->createTimedCodeLink($user_id);
        // $message = "<p>Your verification code is - $random_code </p>";
        // $message .= "<p>Your verification link is - <a href='. $this->createTimedCodeLink($user_id) .'>here</a></p>";

        // send_email($email, "Worshipmate - {code} is your password reset code Verification", "<p>Your verification code is - $random_code </p>");

        return array($random_code, $link);
    }

    public function confirmPasswordResetCode($code){
        if($_SESSION['rcode'] == $code){
            unset($_SESSION['rcode']);
            return true;
        }else{
            return false;
        }
    }

    public function createTimedCodeLink($user_id, $expriy_time_in_minutes = 15){
        global $base_url, $timedCodesModel;

        $uniqueCode = uniqid();

        $expriy_time_timsestamp = time() + ($expriy_time_in_minutes * 60);

        if($timedCodesModel->createCode($user_id, $uniqueCode, $expriy_time_timsestamp)){
            return $base_url . "reset-password?rid=" . $uniqueCode . "&action=reset";
        }else{
            return false;
        }
    }

    public function checkResetLink(){
        if(isset($_GET['rid']) && !empty($_GET['rid']) && isset($_GET['action']) && !empty($_GET['action'])){
            $rid = $_GET['rid'];
            //check if it has not expired or is not invalid
            if($this->checkResetPasswordLinkValidity($rid)){
                // STAY ON PAGE
            }else{
                if(isset($_SESSION['email'])){
                    unset($_SESSION['email']);
                }
            }
        }
    }

    public function checkResetPasswordLinkValidity($rid){
        global $timedCodesModel;

        $link_code_details = $timedCodesModel->getDetailsByCode($rid);

        if($link_code_details){
            if(time() > $link_code_details['expiry_time']){
                return false;
            }else{
                return true;
            }
        }else{
            return false;
        }


    }

    public function updateAccountStatus($userId, $status){
        global $userModel;

        $userModel->updateAccountStatus($userId, $status);
    }
}

// Instantiate the UserController
$authController = new AuthController();

?>
