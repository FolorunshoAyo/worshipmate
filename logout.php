<?php
    require_once __DIR__ . '/core/Database.php';
    require_once __DIR__ . '/models/User.php';
    require_once __DIR__ . '/models/RememberMeToken.php';
    require_once __DIR__ . '/controllers/UserController.php';

    $userController = new UserController();

    if($userController->hasRememberMeToken()){
        $userController->forgetRememeberMeToken($_SESSION['user_id'], $_COOKIE['remember_me_token']);
    }

    session_unset();
    session_destroy();

    header("Location: " . $base_url);
?>