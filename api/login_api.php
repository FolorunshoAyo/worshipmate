<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/models/RememberMeToken.php';
    require_once dirname(__DIR__) . '/controllers/AuthController.php';

    // Perform user registration
    $result = $authController->loginUser();

    // Convert the result to JSON and send it back to the AJAX request
    header('Content-Type: application/json');

    echo json_encode($result);
?>