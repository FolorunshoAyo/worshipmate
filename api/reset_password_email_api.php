<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/models/TimedCodes.php';
    require_once dirname(__DIR__) . '/controllers/UserController.php';

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $email = $_POST['email'];

        // Instantiate the UserController
        $userController = new UserController();
    
        // RETRIEVE USER DETAILS BY EMAIL
        $user = $userModel->getUserByEmail($email);
        
        if($user){
            // SEND PASSWORD RESET CODE
            $code = $userController->sendPasswordResetCode($email);

            if($code){
                $_SESSION['email'] = $email;
                // Convert the result to JSON and send it back to the AJAX request
                header('Content-Type: application/json');
            
                echo json_encode(array("success" => 1, "reset_code" => $code[0], "link" => $code[1]));
            }else{
                echo json_encode(array("success" => 0, "error_type" => "mail-error"));
            }
        }else{
            echo json_encode(array("success" => 0, "error_type" => "email-not-found", "email" => $email));
        }
    }
?>