<?php
// index.php

  require_once __DIR__ . '/core/Database.php';
  require_once __DIR__ . '/models/User.php';
  require_once __DIR__ . '/models/RememberMeToken.php';
  require_once __DIR__ . '/controllers/AuthController.php';

  // perform user login status check
  if($authController->hasRememberMeToken()){
    $authController->validateRememberMeToken($_COOKIE['remember_me_token']);
  }else{
    $authController->checkUserSession("start");
  }


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <title>Worshipmate</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/css/app.css" />
  <link rel="stylesheet" href="assets/css/core.css" />
</head>

<body>
  <!-- Pageloader -->
  <div class="pageloader"></div>
  <div class="infraloader is-active"></div>

  <!-- Concatenated js plugins and jQuery -->
  <script src="assets/js/app.js"></script>
  <script src="assets/data/tipuedrop_content.js"></script>

  <!-- Core js -->
  <script src="assets/js/global.js"></script>

  <!-- Navigation options js -->
  <script src="assets/js/navbar-v1.js"></script>
  <script src="assets/js/navbar-v2.js"></script>
  <script src="assets/js/navbar-mobile.js"></script>
  <script src="assets/js/navbar-options.js"></script>
  <script src="assets/js/sidebar-v1.js"></script>

  <!-- Core instance js -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chat.js"></script>
  <script src="assets/js/touch.js"></script>
  <script src="assets/js/tour.js"></script>

  <!-- Components js -->
  <script src="assets/js/explorer.js"></script>
  <script src="assets/js/widgets.js"></script>
  <script src="assets/js/modal-uploader.js"></script>
  <script src="assets/js/popovers-users.js"></script>
  <script src="assets/js/popovers-pages.js"></script>
  <script src="assets/js/lightbox.js"></script>

  <!-- Embedded Scripts -->
  <script></script>
  <!-- Landing page js -->

  <!-- Signup page js -->

  <!-- Feed pages js -->

  <!-- profile js -->

  <!-- stories js -->

  <!-- friends js -->

  <!-- questions js -->

  <!-- video js -->

  <!-- events js -->

  <!-- news js -->

  <!-- shop js -->

  <!-- inbox js -->

  <!-- settings js -->

  <!-- map page js -->

  <!-- elements page js -->
</body>

</html>