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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Worshipmate | Profile Timeline</title>

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
            <div id="profile-main" class="view-wrap is-headless">
                <div class="columns is-multiline no-margin">
                    <!-- Left side column -->
                    <div class="column is-paddingless">
                        <!-- Timeline Header -->
                        <!-- html/partials/pages/profile/timeline/timeline-header.html -->
                        <?php
                            include("../views/pages/profile/timeline/timeline-header.php");
                        ?>
                    </div>

                </div>

                <div class="columns">
                    <div id="profile-timeline-widgets" class="column is-4">

                        <!-- Basic Infos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/basic-infos-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/basic-info-widgets.php");
                        ?>
                        <!-- Photos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/photos-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/photos-widget.php");
                        ?>
                        <!-- Star friends widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/star-friends-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/star-friends-widget.php");
                        ?>
                        <!-- Videos widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/videos-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/videos-widget.php");
                        ?>
                        <!-- Trips widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/trips-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/trips-widget.php");
                        ?>
                        <!-- Events widget -->
                        <!-- html/partials/pages/profile/timeline/widgets/events-widget.html -->
                        <?php
                            include("../views/pages/profile/timeline/widgets/events-widget.php");
                        ?>
                    </div>

                    <div class="column is-8">
                        <div id="profile-timeline-posts" class="box-heading">
                            <h4>Posts</h4>
                            <div class="button-wrap">
                                <button type="button" class="button is-active">Recent</button>
                                <button type="button" class="button">Popular</button>
                            </div>
                        </div>

                        <div class="profile-timeline">

                            <!-- Timeline POST #1 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                    include("../views/pages/feed/posts/feed-post-1.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /Timeline POST #1 -->
                            <!-- Timeline POST #2 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                    include("../views/pages/feed/posts/feed-shared-post.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /Timeline POST #2 -->
                            <!-- Timeline POST #3 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                    include("../views/pages/feed/posts/feed-post-1.php");
                                ?>
                            </div>
                            <!-- Timeline POST #3 -->
                            <!-- Timeline POST #4 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                    include("../views/pages/feed/posts/feed-post-multiple.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /timeline POST #4 -->  
                            <!-- Timeline POST #5 -->
                            <div class="profile-post is-simple">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                include("../views/pages/feed/posts/feed-post-text-only.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /timeline POST #5 -->
                            <!-- Timeline post 6 -->
                            <!-- html/partials/pages/profile/posts/timeline-post6.html -->
                            <!-- Timeline POST #6 -->
                            <div class="profile-post is-simple">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/stella.jpg" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                include("../views/pages/feed/posts/feed-post-text-only.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /timeline POST #6 -->
                            <!-- Timeline post 7 -->
                            <!-- html/partials/pages/profile/posts/timeline-post7.html -->
                            <!-- Timeline POST #7 -->
                            <div class="profile-post">
                                <!-- Timeline -->
                                <div class="time is-hidden-mobile">
                                    <div class="img-container">
                                        <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                    </div>
                                </div>
                                <!-- Post -->
                                <?php
                                include("../views/pages/feed/posts/feed-post-3.php");
                                ?>
                                <!-- /Post -->
                            </div>
                            <!-- /timeline POST #7 -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile page main wrapper -->

        </div>
        <!-- /Container -->

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
        <!-- Share modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->
        <?php
        include("../views/modals/share-modal.php");
        ?>
    </div>

    <?php
        include("../views/embeds/chat.php");
        include("../views/modals/add-conversation-modal.php");
        include("../views/embeds/explorer-menu.php");
        include("../views/modals/logout-confirmation-modal.php");
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
    <script src="../assets/js/feed.js"></script>

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