<?php
// verify-email.php

require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/models/TimedCodes.php';
require_once __DIR__ . '/controllers/UserController.php';

  $userController->checkResetLink();

  $userController->checkUserSession("reset-password");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Worshipmate | Reset Password</title>
    <?php
    include "views/embeds/head-embed.php";
    ?>
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

                        <h2 class="form-title has-text-centered">Enter your new password </h2>
                        <h3 class="form-subtitle has-text-centered">Create a new password that is at least 6 characters long. A strong password is a combination of letters, numbers, and punctuation marks</h3>

                        <!--Form-->
                        <form method="post" id="verify-code-form">
                            <div class="login-form">
                                <div class="form-panel">
                                    <div class="field">
                                        <label for="pwd">New password</label>
                                        <div class="control has-validation">
                                            <input type="password" id="pwd" name="pwd" class="input" required placeholder="Enter new password">
                                            <div class="error-icon">
                                                <i data-feather="x"></i>
                                            </div>
                                            <div class="success-icon">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-panel">
                                    <div class="field">
                                        <label for="cpwd">Confirm New Password</label>
                                        <div class="control has-validation">
                                            <input type="password" id="cpwd" name="cpwd" class="input" required placeholder="Reenter new password">
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
                            </div>
                        </form>

                        <div id="alert-modal-success" class="modal is-xsmall has-light-bg">
                            <div class="modal-background"></div>
                            <div class="modal-content">
                    
                                <div class="card">
                                    <div class="card-heading">
                                        <h3>Password Reset Successful</h3>
                    
                                        <!-- Close X button -->
                                        <!-- <div class="close-wrap">
                                            <span class="close-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="card-body">
                                        <p>You have successfully reset your account password with the email <b>folushoayomide11@gmail.com</b>. You will use this new password with email to login.</p>
                                    </div>                                   
                                    <div class="card-footer">
                                        <div class="button-wrap mt-3">
                                            <!-- <button type="button" class="button is-solid dark-grey-button close-modal">Cancel</button> -->
                                            <a class="button is-solid primary-button close-modal" href="./signin">Okay</a>
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
                                        <h3>Password Reset Error</h3>
                    
                                        <!-- Close X button -->
                                        <!-- <div class="close-wrap">
                                            <span class="close-modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                            </span>
                                        </div> -->
                                    </div>
                                    <div class="card-body">
                                         <p>The code sent to <b>folushoayomide11@gmail.com</b> do not match with provided input. You can send the code again or if you have any isssues you can contact our <a href="#">support</a>.</p>
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
      const validate = new JustValidate("#verify-code-form", {
        validateBeforeSubmitting: true,
        focusInvalidField: true,
        tooltip: {
          position: "top",
        },
      });

      validate
      .addField("#pwd", [
        {
            rule: "customRegexp",
            value: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/,
            errorMessage: "8+ characters, at least 1 uppercase, 1 lowercase, 1 number, 1 special character."
        }
        ,{
        rule: "required",
      }, ])
      .addField("#cpwd", [{
          rule: "required",
        },
        {
          validator: (value, fields) => {
            if (fields["#pwd"] && fields["#pwd"].elem) {
              const repeatPasswordValue = fields["#pwd"].elem.value;

              return value === repeatPasswordValue;
            }

            return true;
          },
          errorMessage: "Passwords should be the same",
        },
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
            url: "api/reset_password_api.php",
            type: "POST",
            data: form.serialize()<?= isset($_GET['rid'])? "+ '&rid='" . "+ '" . $_GET['rid'] . "'" : "" ?>,
            dataType: "json",
            beforeSend: function(){
              $("#verify-code-form button.primary-button").addClass("is-loading");
              $("#verify-code-form button.primary-button").attr("disabled", true);
            },
            success: function (response) {
              if (response.success) {
                showActivityModal("success", "<p>You have successfully changed your password for <b>" + response.email + "</b>. You will be redirected to the login page.</p>");
              } else {
                $("#verify-code-form button.primary-button").removeClass("is-loading");
                $("#verify-code-form button.primary-button").attr("disabled", false);

                showActivityModal("error", "<p>We could not change the password of: <b>" + response.email + "</b>. If you have any isssues you can contact our <a href='#'>support</a>.</p>")
              }
            },
            error: function () {
                showActivityModal("error",
                "<p>An error occurred. Please try again.</p>"
              );
              $("#verify-code-form button.primary-button").removeClass("is-loading");
              $("#verify-code-form button.primary-button").attr("disabled", false);
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