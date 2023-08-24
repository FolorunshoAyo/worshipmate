<?php
// signup.php
require_once __DIR__ . '/core/Database.php';
require_once __DIR__ . '/models/User.php';
require_once __DIR__ . '/controllers/AuthController.php';

if ($authController->hasRememberMeToken()) {
  $authController->validateRememberMeToken($_COOKIE['remember_me_token']);
} else {
  $authController->checkUserSession("signup");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />

  <title>Worshipmate | Signup</title>

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
  <div class="signup-wrapper">
    <!--Fake navigation-->
    <div class="fake-nav">
      <a href="/" class="logo">
        <img class="light-image" src="assets/img/vector/logo/friendkit-bold.svg" width="112" height="28" alt="" />
        <img class="dark-image" src="assets/img/vector/logo/friendkit-white.svg" width="112" height="28" alt="" />
      </a>
    </div>

    <div class="container">
      <!--Container-->
      <div class="login-container is-centered">
        <div class="columns is-vcentered">
          <div class="column">
            <h2 class="form-title has-text-centered">Hey there!</h2>
            <h3 class="form-subtitle has-text-centered">
              Lets create your account.
            </h3>

            <!--Form-->
            <form method="post" id="signup-form">
              <div class="login-form">
                <div class="form-panel">
                  <div class="columns is-multiline">
                    <div class="column is-6">
                      <div class="field">
                        <label for="first_name">First Name</label>
                        <div class="control has-validation">
                          <input id="first_name" name="first_name" type="text" class="input" required placeholder="Enter your first name" />
                          <div class="error-icon">
                            <i data-feather="x"></i>
                          </div>
                          <div class="success-icon">
                            <i data-feather="check"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-6">
                      <div class="field">
                        <label for="last_name">Last Name</label>
                        <div class="control has-validation">
                          <input id="last_name" name="last_name" type="text" class="input" required placeholder="Enter your last name" />
                          <div class="error-icon">
                            <i data-feather="x"></i>
                          </div>
                          <div class="success-icon">
                            <i data-feather="check"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12">
                      <div class="field">
                        <label for="email">Email</label>
                        <div class="control has-validation">
                          <input id="email" required name="email" type="text" class="input" placeholder="Enter your email address" />
                          <div class="error-icon">
                            <i data-feather="x"></i>
                          </div>
                          <div class="success-icon">
                            <i data-feather="check"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12">
                      <div class="field">
                        <label for="dob">Date of Birth</label>
                        <div class="control has-validation">
                          <input type="date" id="dob" required name="dob" min="1905-01-01" max="2018-12-31" class="input" placeholder="Provide your birth date" />
                        </div>
                      </div>
                    </div>
                    <div class="column is-12">
                      <div class="field">
                        <label>Gender</label>
                        <div id="gender-select">
                          <div class="is-inline-block mr-2">
                            <label for="gender-select-1" class="material-radio ">
                              <input id="gender-select-1" type="radio" name="gender" value="male">
                              <span class="dot"></span>
                              <span class="radio-label">Male</span>
                            </label>
                          </div>
                          <div class="is-inline-block">
                            <label for="gender-select-2" class="material-radio">
                              <input id="gender-select-2" type="radio" name="gender" value="female">
                              <span class="dot"></span>
                              <span class="radio-label">Female</span>
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12">
                      <div class="field">
                        <label for="pwd">Password</label>
                        <div class="control has-validation">
                          <input id="pwd" type="password" name="pwd" required class="input" placeholder="Enter your password" />
                          <div class="error-icon">
                            <i data-feather="x"></i>
                          </div>
                          <div class="success-icon">
                            <i data-feather="check"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="column is-12">
                      <div class="field">
                        <label for="cpwd">Confirm password</label>
                        <div class="control has-validation">
                          <input id="cpwd" name="cpwd" type="password" class="input" required placeholder="Renter your password" />
                          <div class="error-icon">
                            <i data-feather="x"></i>
                          </div>
                          <div class="success-icon">
                            <i data-feather="check"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="column is-12">
                                            <div class="field is-flex">
                                                <div class="switch-block">
                                                    <label class="f-switch">
                                                        <input type="checkbox" class="is-switch">
                                                        <i></i>
                                                    </label>
                                                    <div class="meta">
                                                        <p>Subscribe to Newsletter?</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                  </div>
                </div>

                <div class="buttons mt-5">
                  <button class="button is-solid primary-button is-fullwidth raised">
                    Create Account
                  </button>
                </div>

                <div class="account-link has-text-centered">
                  <a href="signin">Have an account? Sign In</a>
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
    const validate = new JustValidate("#signup-form", {
      validateBeforeSubmitting: true,
      focusInvalidField: true,
      tooltip: {
        position: "top",
      },
    });

    validate
      .addField("#first_name", [{
          rule: "required",
        },
        {
          rule: "minLength",
          value: 3,
        },
        {
          rule: "maxLength",
          value: 20,
        },
      ])
      .addField("#last_name", [{
          rule: "required",
        },
        {
          rule: "minLength",
          value: 3,
        },
        {
          rule: "maxLength",
          value: 20,
        },
      ])
      .addField("#dob", [{
        rule: "required",
      }, ])
      .addField("#email", [{
          rule: "required",
        },
        {
          rule: "email",
        },
      ])
      .addRequiredGroup('#gender-select', "Select your gender")
      .addField("#pwd", [{
          rule: "customRegexp",
          value: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/,
          errorMessage: "8+ characters, at least 1 uppercase, 1 lowercase, 1 number, 1 special character."
        },
        {
          rule: "required"
        }
      ])
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
          url: "api/register_api.php",
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
              // alert("registration was successful");
              // location.href = "verify-email";
            } else {
              alert(response.error_message);
              $("button.primary-button").removeClass("is-loading");
              $("button.primary-button").attr("disabled", false);
            }
          },
          error: function() {
            alert(
              "An error occurred during registration. Please try again later."
            );
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