<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/controllers/AuthController.php';

    if(isset($_POST['code']) && !empty($_POST['code'])){
        $code = $_POST['code'];
        $user_id = $_SESSION['user_id'];
    
        // Perform user registration
        if($authController->confirmVerificationCode($user_id, $code)){
            unset($_SESSION['vcode']);
            // Convert the result to JSON and send it back to the AJAX request
            header('Content-Type: application/json');
        
            echo json_encode(array("success" => 1));
        }else{
            echo json_encode(array("success" => 0));
        }
    }
?>