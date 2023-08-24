<?php
    require_once __DIR__ . '/core/Database.php';
    require_once __DIR__ . '/models/User.php';
    require_once __DIR__ . '/models/RememberMeToken.php';
    require_once __DIR__ . '/controllers/AuthController.php';


    if($authController->hasRememberMeToken()){
        $authController->forgetRememeberMeToken($_SESSION['user_id'], $_COOKIE['remember_me_token']);
    }

    session_unset();
    session_destroy();

    header("Location: " . $base_url);
?>