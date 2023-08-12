<?php
    require_once dirname(__DIR__) . '/core/Database.php';
    require_once dirname(__DIR__) . '/models/User.php';
    require_once dirname(__DIR__) . '/controllers/UserController.php';

    $userController->checkUserSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Worshipmate | Friends</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include("../views/embeds/head-embed.php");
    ?>
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay"></div>

    <?php
    include("../views/shared/header.php");
    ?>

    <div class="view-wrapper">

        <!-- /partials/global/options-nav/friends-options-nav.html -->
        <?php
        include("../views/embeds/options-nav/friends-option-nav.php");
        ?>
        <!-- /partials/global/sidebar/friends-filters-panel.html -->
        <?php
        include("../views/embeds/sidebar/friends-filters-panel.php");
        ?>
        <!-- /partials/global/pageloader/subloaders/grey-subloader.html -->
        <div class="subloader is-grey is-active">
            <div class="loader is-loading"></div>
        </div>

        <div id="friends-page" class="friends-wrapper main-container">

            <!--First tab-->
            <div id="all-friends" class="card-row-wrap is-active">
                <div class="card-row-placeholder is-hidden">
                    No matching results
                </div>
                <div class="card-row">
                    <!-- /partials/pages/friends/friend-lists/all-friends.html -->
                    <?php
                        include("../views/pages/friends/friend-lists/all-friends.php");
                    ?>
                </div>
            </div>

            <!--Second tab-->
            <div id="starred-friends" class="card-row-wrap">
                <div class="card-row-placeholder is-hidden">
                    No matching results
                </div>
                <div class="card-row">
                    <!-- /partials/pages/friends/friend-lists/starred-friends.html -->
                    <?php
                        include("../views/pages/friends/friend-lists/starred-friends.php");
                    ?>
                </div>
            </div>

            <!--third tab-->
            <div id="new-friends" class="card-row-wrap">
                <div class="card-row-placeholder is-hidden">
                    No matching results
                </div>
                <div class="card-row">
                    <!-- /partials/pages/friends/friend-lists/new-friends.html -->
                    <?php
                        include("../views/pages/friends/friend-lists/new-friends.php");
                    ?>
                </div>
            </div>
        </div>

    </div>

    <?php
    include("../views/embeds/chat.php");
    include("../views/modals/add-conversation-modal.php");
    include("../views/embeds/explorer-menu.php");
    ?>
    <div id="end-tour-modal" class="modal end-tour-modal is-xsmall has-light-bg">
        <div class="modal-background"></div>
        <div class="modal-content">

            <div class="card">
                <div class="card-heading">
                    <h3></h3>
                    <!-- Close X button -->
                    <div class="close-wrap">
                        <span class="close-modal">
                                <i data-feather="x"></i>
                            </span>
                    </div>
                </div>
                <div class="card-body has-text-centered">

                    <div class="image-wrap">
                        <img src="../assets/img/vector/logo/friendkit.svg" alt="">
                    </div>

                    <h3>That's all folks!</h3>
                    <p>Thanks for taking the friendkit tour. There are still tons of other features for you to discover!</p>

                    <div class="action">
                        <a href="/#demos-section" class="button is-solid accent-button raised is-fullwidth">Explore</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="../assets/js/friends.js"></script>

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