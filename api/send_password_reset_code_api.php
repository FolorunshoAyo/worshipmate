<?php
require_once dirname(__DIR__) . '/core/Database.php';
require_once dirname(__DIR__) . '/models/User.php';
require_once dirname(__DIR__) . '/controllers/AuthController.php';

    if($_POST['email']){
        $email = $_POST['email'];

        $reset_code = $authController->sendPasswordResetCode($email);

        if($reset_code){
            echo json_encode(array("success" => 1));
        }else{
            echo json_encode(array("success" => 0, "error_message" => "Unable to send password reset code"));
        }
    }

?>