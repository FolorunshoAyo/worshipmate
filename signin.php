<?php
// signup.php
  require_once __DIR__ . '/core/Database.php';
  require_once __DIR__ . '/models/User.php';
  require_once __DIR__ . '/models/RememberMeToken.php';
  require_once __DIR__ . '/controllers/UserController.php';

    if($userController->hasRememberMeToken()){
        $userController->validateRememberMeToken($_COOKIE['remember_me_token']);
    }else{
        $userController->checkUserSession("signin");
    }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Worshipmate | Login</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/core.css">
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="signup-wrapper">

        <!--Fake navigation-->
        <div class="fake-nav">
            <a href="/" class="logo">
                <img class="light-image" src="assets/img/vector/logo/friendkit-bold.svg" width="112" height="28" alt="">
                <img class="dark-image" src="assets/img/vector/logo/friendkit-white.svg" width="112" height="28" alt="">
            </a>
        </div>

        <div class="container">
            <!--Container-->
            <div class="login-container is-centered">
                <div class="columns is-vcentered">
                    <div class="column">

                        <h2 class="form-title has-text-centered">Welcome Back</h2>
                        <h3 class="form-subtitle has-text-centered">Enter your credentials to sign in.</h3>

                        <!--Form-->
                        <form method="post" id="signin-form">
                        <div class="login-form">
                            <div class="form-panel">
                                <div class="field">
                                    <label for="email">Email</label>
                                    <div class="control">
                                        <input id="email" type="text" name="email" class="input" placeholder="Enter your email address">
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="pwd">Password</label>
                                    <div class="control">
                                        <input id="pwd" type="password" name="pwd" class="input" placeholder="Enter your password">
                                    </div>
                                </div>
                                <div class="field is-flex">
                                    <div class="switch-block">
                                        <label for="remember_me" class="f-switch">
                                            <input id="remember_me" type="checkbox" name="remember_me" class="is-switch">
                                            <i></i>
                                        </label>
                                        <div class="meta">
                                            <p>Remember me?</p>
                                        </div>
                                    </div>
                                    <a href="./forgot-password">Forgot Password?</a>
                                </div>
                            </div>

                            <div class="buttons">
                                <button class="button is-solid primary-button is-fullwidth raised">Login</button>
                            </div>

                            <div class="account-link has-text-centered">
                                <a href="signup">Don't have an account? Sign Up</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Concatenated js plugins and jQuery -->
    <script src="assets/js/app.js"></script>
    <script src="assets/data/tipuedrop_content.js"></script>

    <!-- Plugins -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

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
    <script>
        const validate = new JustValidate("#signin-form", {
        validateBeforeSubmitting: true,
        focusInvalidField: true,
        tooltip: {
            position: "top",
        },
        });

        validate
        .addField("#email", [{
            rule: "required",
            },
            {
            rule: "email",
            },
        ])
        .addField("#pwd", [{
            rule: "required",
        }, ])
        .onFail(function(fields) {
            this.onValidate(function({
            fields
            }) {
            validateInit(fields);
            });

            validateInit(fields);
        })
        .onSuccess((event) => {
            const form = $(event.target);

            $.ajax({
            url: "api/login_api.php",
            type: "POST",
            data: form.serialize(),
            dataType: "json",
            beforeSend: function() {
                $("button.primary-button").addClass("is-loading");
                $("button.primary-button").attr("disabled", true);
            },
            success: function(response) {
                console.log(response);

                if (response.success) {
                    if(response.redirect){
                        alert("Redirecting to verify email");
                        // location.href = "verify-email";
                    }else{
                        alert("Login was successful");
                        location.href = "user/";
                    }
                } else {
                    iziToast.error({
                        title: 'Login Error',
                        message: response.error_message,
                        position: 'topLeft',
                    });

                    $("button.primary-button").removeClass("is-loading");
                    $("button.primary-button").attr("disabled", false);
                }
            },
            error: function() {
                iziToast.error({
                    title: 'Login Error',
                    message: 'An error occurred during signing in. Please try again later.',
                    position: 'topLeft',
                });
                $("button.primary-button").removeClass("is-loading");
                $("button.primary-button").attr("disabled", false);
            },
            });
        });

        function validateInit(fields) {
        for (const field_name in fields) {
            const input = fields[field_name];

            if (!input.isValid) {
            input.elem.offsetParent.className =
                "control has-validation has-error";
            } else {
            input.elem.offsetParent.className =
                "control has-validation has-success";
            }
        }
        }
    </script>

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