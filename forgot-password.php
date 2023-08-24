<?php
// verify-email.php

require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controllers/UserController.php';

  // perform user session check
  $authController->checkUserSession("forgot-password");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Worshipmate | Forgot Password</title>
    
    <?php 
        include("views/embeds/head-embed.php");
    ?>
</head>

<body <?= !isDayTime()? "class='is-dark'" : "" ?>>
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

                        <h2 class="form-title has-text-centered">Find Your Account</h2>
                        <h3 class="form-subtitle has-text-centered">Let us know the email associated with your account</h3>

                        <!--Form-->
                        <form method="post" id="forgot-password-form">
                            <div class="login-form">
                                <div class="form-panel">
                                    <div class="field">
                                        <label for="email">Email</label>
                                        <div class="control has-validation">
                                            <input type="email" id="email" name="email" class="input" required placeholder="Enter email">
                                            <div class="error-icon">
                                                <i data-feather="x"></i>
                                            </div>
                                            <div class="success-icon">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="buttons mt-5">
                                    <button class="button is-solid primary-button is-fullwidth raised">Confirm</button>
                                </div>
    
                                <div class="account-link has-text-centered">
                                    Back to login? <a href="./signin">Login</a>
                                </div>
                            </div>
                        </form>

                        <div id="alert-modal-success" class="modal is-xsmall has-light-bg">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                    
                                <div class="card">
                                    <div class="card-heading">
                                        <h3>Account Confirmed</h3>
                    
                                        <!-- Close X button -->
                                        <!-- <div class="close-wrap">
                                            <span class="close-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="card-body">
                                        <p>You have successfully confirmed your account with the email <b>folushoayomide11@gmail.com</b>. You will use this email to login.</p>
                                    </div>                                   
                                    <div class="card-footer">
                                        <div class="button-wrap mt-3">
                                            <!-- <button type="button" class="button is-solid dark-grey-button close-modal">Cancel</button> -->
                                            <a class="button is-solid primary-button close-modal" href="user/index.html">Okay</a>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
                        </div>

                        <div id="alert-modal-error" class="modal is-xsmall has-light-bg">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                    
                                <div class="card">
                                    <div class="card-heading">
                                        <h3>Confirmation Error</h3>
                    
                                        <!-- Close X button -->
                                        <!-- <div class="close-wrap">
                                            <span class="close-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="card-body">
                                    </div>                                   
                                    <div class="card-footer">
                                        <div class="button-wrap mt-3">
                                            <!-- <button type="button" class="button is-solid dark-grey-button close-modal">Cancel</button> -->
                                            <button type="button" class="button is-solid primary-button close-modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Plugins -->
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js"></script>

    <!-- Embedded Scripts -->
    <script>
        // CODE TO CLOSE MODAL
        $("button.close-modal").on("click", function (){
            $(this).parent().parent().parent().parent().parent().removeClass("is-active");
        });

        // MODAL HANLER
        function showActivityModal(type, message = ""){
            if(type === "success"){
                $("#alert-modal-success .card-body").html(message);
                $("#alert-modal-success").addClass("is-active");
            }else{
                $("#alert-modal-error .card-body").html(message);
                $("#alert-modal-error").addClass("is-active");
            }
        }

        // VALIDATOR
      const validate = new JustValidate("#forgot-password-form", {
        validateBeforeSubmitting: true,
        focusInvalidField: true,
        tooltip: {
          position: "top",
        },
      });

      validate
        .addField("#email", [
          {
            rule: "required",
          },
          {
            rule: "email",
          }
        ])
        .onFail(function (fields) {

            this.onValidate(function ({ fields }){
                validateInit(fields);
            });

            validateInit(fields);
        })
        .onSuccess((event) => {
            const form = $(event.target);

          $.ajax({
            url: "api/reset_password_email_api.php",
            type: "POST",
            data: form.serialize(),
            dataType: "json",
            beforeSend: function(){
              $("#forgot-password-form button.primary-button").addClass("is-loading");
              $("#forgot-password-form button.primary-button").attr("disabled", true);
            },
            success: function (response) {
              if (response.success) {
                console.log(response.reset_code);
                // location.href = "verify-reset-code";
                // showActivityModal("success", "<p>You have successfully confirmed your account with the email <b>" + response.email + "</b>. You will use this email to login.</p>");
              } else {
                $("#forgot-password-form button.primary-button").removeClass("is-loading");
                $("#forgot-password-form button.primary-button").attr("disabled", false);

                if(response.error_type === "email-not-found"){
                    showActivityModal("error", "<p>The email <b>" + response.email + "</b> is not recognised. If you have any isssues you can contact our <a href='#'>support</a>.</p>")
                }else{
                    showActivityModal("error", "Unable to process request. If you have any isssues you can contact our <a href='#'>support</a>.</p>")
                }
              }
            },
            error: function () {
                showActivityModal("error",
                "<p>An error occurred during verification. Please try again.</p>"
              );
              $("#forgot-password-form button.primary-button").removeClass("is-loading");
              $("#forgot-password-form button.primary-button").attr("disabled", false);
            },
          });
        });

        function validateInit(fields){
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