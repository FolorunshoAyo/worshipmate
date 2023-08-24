<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/controllers/AuthController.php';

    if(isset($_POST['rcode']) && !empty($_POST['rcode'])){
        $rcode = $_POST['rcode'];
        $email = $_SESSION['email'];
    
        // Perform user registration
        if($authController->confirmPasswordResetCode($rcode)){
            unset($_SESSION['rcode']);

            // Convert the result to JSON and send it back to the AJAX request
            header('Content-Type: application/json');
        
            echo json_encode(array("success" => 1));
        }else{
            echo json_encode(array("success" => 0));
        }
    }
?>