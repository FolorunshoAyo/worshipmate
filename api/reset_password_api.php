<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/models/TimedCodes.php';
    require_once dirname(__DIR__) . '/controllers/AuthController.php';

    // RESET LINK INCLUSIVE
    if(isset($_POST['pwd']) && !empty($_POST['pwd']) && isset($_POST['cpwd']) && !empty($_POST['cpwd']) && (isset($_POST['rid']) && !empty($_POST['rid']))){
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        $rid = $_POST['rid'];
        $errors = array();

        // GET USER DETAILS FROM RESET LINK CODE
        $user_id = $timedCodesModel->getDetailsByCode($rid)['user_id'];
        $user = $userModel->getUserById($user_id);
    
        if($pwd !== $cpwd){
            $errors[] = "Password Error";
        }

        header('Content-Type: application/json');

        if(count($errors) > 0){
            echo json_encode(array("success" => 0));
        }else{
            $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);

            // Perform user registration
            if($userModel->updatePassword($user_id, $pwd_hash)){
                // Convert the result to JSON and send it back to the AJAX request

                echo json_encode(array("success" => 1, "email" => $user['email']));
            }else{
                echo json_encode(array("success" => 0));
            }
        }
    }else{
        // WITHOUT RESET LINK
        $pwd = $_POST['pwd'];
        $cpwd = $_POST['cpwd'];
        $email = $_SESSION['email'];
        $errors = array();

        $user = $userModel->getUserByEmail($email);
    
        if($pwd !== $cpwd){
            $errors[] = "Password Error";
        }

        header('Content-Type: application/json');

        if(count($errors) > 0){
            echo json_encode(array("success" => 0));
        }else{
            $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);

            // Perform user registration
            if($userModel->updatePassword($user_id['user_id'], $pwd_hash)){
                unset($_SESSION['email']);
                // Convert the result to JSON and send it back to the AJAX request

                echo json_encode(array("success" => 1, "email" => $user['email']));
            }else{
                echo json_encode(array("success" => 0));
            }
        }
    }


?>