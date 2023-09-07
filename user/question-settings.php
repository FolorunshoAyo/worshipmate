<?php
require_once dirname(__DIR__) . '/core/Database.php';
require_once dirname(__DIR__) . '/models/User.php';
require_once dirname(__DIR__) . '/controllers/AuthController.php';

$authController->checkUserSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Friendkit | Questions | Statistics</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include("../views/embeds/head-embed.php");
    ?>
</head>

<body class="is-white">
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    <div class="app-overlay"></div>

    <?php
        include("../views/shared/header.php");
    ?>


    <div class="view-wrapper">
        <!-- /html/partials/pages/questions/questions-nav-menu.html -->
        <div class="questions-nav">
            <div class="inner is-scrollable">
                <div class="container">
                    <div class="questions-nav-menu">
                        <a href="question-home" class="menu-item">
                            <i data-feather="home"></i>
                            <span>Home</span>
                        </a>
                        <a href="question-single" class="menu-item">
                            <i data-feather="message-circle"></i>
                            <span>My Questions</span>
                        </a>
                        <a href="question-stats" class="menu-item">
                            <i data-feather="hexagon"></i>
                            <span>My Stats</span>
                        </a>
                        <a href="question-categories" class="menu-item">
                            <i data-feather="layers"></i>
                            <span>Categories</span>
                        </a>
                        <a href="question-settings" class="menu-item">
                            <i data-feather="settings"></i>
                            <span>Settings</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question wrap -->
        <div class="questions-wrap is-smaller">
            <!-- Container -->
            <div class="container">
                <!-- /html/partials/global/placeload/questions/questions-shadow-dom-settings.html -->
                <div id="questions-shadow-dom-settings" class="columns">
                    <div class="column is-3">
                        <!-- /html/partials/global/placeload/placeloads/questions-menu-placeload.html -->
                        <div class="placeload is-bold questions-menu-placeload">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <!-- /html/partials/global/placeload/placeloads/questions-settings-placeload.html -->
                        <div class="placeload is-bold questions-settings-placeload">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>

                        <div class="placeload questions-settings-placeload is-card">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <!-- /html/partials/global/placeload/placeloads/questions-side-placeload.html -->
                        <div class="placeload questions-side-placeload">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <!-- /html/partials/global/placeload/placeloads/questions-side-placeload.html -->
                        <div class="placeload questions-side-placeload">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns true-dom is-hidden">
                    <div class="column is-3">
                        <!-- /html/partials/pages/questions/questions-menu.html -->
                        <?php
                        include("../views/pages/questions/questions-menu.php");
                        ?>
                    </div>
                    <div class="column is-6">
                        <div class="questions-settings">
                            <div class="settings-header">
                                <h2>Settings</h2>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="Search..." />
                                    <div class="search-icon">
                                        <i data-feather="search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="settings-body">
                                <div class="switch-block">
                                    <label class="f-switch is-accent">
                                        <input type="checkbox" class="is-switch" checked />
                                        <i></i>
                                    </label>
                                    <div class="meta">
                                        <span>New Question</span>
                                        <span>Receive a notification when someone you are following posts a
                                            new question.</span>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <label class="f-switch is-accent">
                                        <input type="checkbox" class="is-switch" />
                                        <i></i>
                                    </label>
                                    <div class="meta">
                                        <span>New Answer</span>
                                        <span>Receive a notification when someone posts an answer to a
                                            question you asked.</span>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <label class="f-switch is-accent">
                                        <input type="checkbox" class="is-switch" />
                                        <i></i>
                                    </label>
                                    <div class="meta">
                                        <span>Upvotes</span>
                                        <span>Receive notifications when your answers are being
                                            upvoted.</span>
                                    </div>
                                </div>
                                <div class="switch-block">
                                    <label class="f-switch is-primary">
                                        <input type="checkbox" class="is-switch" />
                                        <i></i>
                                    </label>
                                    <div class="meta">
                                        <span>New Follower</span>
                                        <span>Receive a notification when someone starts following
                                            you.</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column is-3">
                        <div class="questions-side-card">
                            <img class="light-image" src="../assets/img/icons/questions/help.svg" alt="" />
                            <img class="dark-image" src="../assets/img/icons/questions/help-dark.svg" alt="" />
                            <h4>Help center</h4>
                            <p>
                                Having trouble? Please search our
                                <a class="standard-link">Help Center</a> for a quick answer to your
                                problem.
                            </p>
                        </div>

                        <div class="questions-side-card">
                            <img class="light-image" src="../assets/img/icons/questions/assistance.svg" alt="" />
                            <img class="dark-image" src="../assets/img/icons/questions/assistance-dark.svg" alt="" />
                            <h4>24/7 Support</h4>
                            <p>
                                Our Help Center didn't help? Please contact our 24/7
                                <a class="standard-link">Customer Assistance</a> hotline.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
        include("../views/embeds/chat.php");
        include("../views/modals/add-conversation-modal.php");
        include("../views/embeds/explorer-menu.php");
        include("../views/modals/logout-confirmation-modal.php");
    ?>

    <!-- Concatenated js plugins and jQuery -->
    <script src="../assets/js/app.js"></script>
    <script src="../assets/data/tipuedrop_content.js"></script>

    <!-- Core js -->
    <script src="../assets/js/global.js"></script>

    <!-- Navigation options js -->
    <script src="../assets/js/navbar-v1.js"></script>
    <script src="../assets/js/navbar-v2.js"></script>
    <script src="../assets/js/navbar-mobile.js"></script>
    <script src="../assets/js/navbar-options.js"></script>
    <script src="../assets/js/sidebar-v1.js"></script>

    <!-- Core instance js -->
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/chat.js"></script>
    <script src="../assets/js/touch.js"></script>
    <script src="../assets/js/tour.js"></script>

    <!-- Components js -->
    <script src="../assets/js/explorer.js"></script>
    <script src="../assets/js/widgets.js"></script>
    <script src="../assets/js/modal-uploader.js"></script>
    <script src="../assets/js/popovers-users.js"></script>
    <script src="../assets/js/popovers-pages.js"></script>
    <script src="../assets/js/lightbox.js"></script>

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->

    <!-- profile js -->

    <!-- stories js -->

    <!-- friends js -->

    <!-- questions js -->
    <script src="../assets/js/questions.js"></script>

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