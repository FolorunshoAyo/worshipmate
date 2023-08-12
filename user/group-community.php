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

    <title> Worshipmate | Page Profile</title>
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

        <!-- Container -->
        <div class="container is-custom">

            <!-- Profile page main wrapper -->
            <div id="pages-community" class="view-wrap is-headless">
                <div class="columns is-multiline no-margin">
                    <!-- Left side column -->
                    <div class="column is-paddingless">
                        <!-- Timeline Header -->
                        <!-- html/partials/pages/pages/page-profile-header.html -->
                        <?php
                        include("../views/pages/pages/page-profile-header.php");
                        ?>
                    </div>

                </div>

                <div class="columns has-portrait-padding">

                    <div class="column is-4">

                        <!-- Community widget -->
                        <!-- html/partials/pages/widgets/page-community-widget.html -->
                        <?php
                        include("../views/pages/pages/widgets/page-community-widget.php");
                        ?>
                    </div>

                    <div class="column is-8">
                        <div class="community-content">
                            <div class="community-info">
                                <div class="page-followers">
                                    <div class="header">
                                        <h3>Followers</h3>
                                    </div>
                                    <?php
                                    include("../views/pages/pages/page-followers.php");
                                    ?>
                                </div>
                            </div>
                            <div class="community-widgets">
                                    <?php
                                    include("../views/pages/pages/widgets/page-counts.php");
                                    include("../views/pages/pages/widgets/page-invites.php");
                                    ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Change cover image modal -->
        <!--html/partials/pages/profile/timeline/modals/change-cover-modal.html-->
        <?php
        include("../views/pages/profile/timeline/modals/change-cover-modal.php");
        ?>
        <!-- Change profile pic modal -->
        <!--html/partials/pages/profile/timeline/modals/change-profile-pic-modal.html-->
        <?php
        include("../views/pages/profile/timeline/modals/change-profile-pic-modal.php");
        ?>
        <!-- User photos and albums -->
        <!--html/partials/pages/profile/timeline/modals/user-photos-modal.html-->
        <?php
        include("../views/pages/profile/timeline/modals/user-photos-modal.php");
        ?>
        <!-- Profile picture crop modal -->
        <!--html/partials/pages/profile/timeline/modals/upload-crop-profile-modal.html-->
        <?php
        include("../views/pages/profile/timeline/modals/upload-crop-profile-modal.php");
        ?>
        <!-- Cover image crop modal -->
        <!--html/partials/pages/profile/timeline/modals/upload-crop-cover-modal.html-->
        <?php
        include("../views/pages/profile/timeline/modals/upload-crop-cover-modal.php");
        ?>
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
    <script src="../assets/js/profile.js"></script>

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