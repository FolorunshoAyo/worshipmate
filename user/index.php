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

    <title> Worshipmate | Feed</title>
    
    <?php
        include_once("../views/embeds/head-embed.php");
    ?>
    <style>
        
    </style>
</head>

<body>
    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay"></div>

    <?php
        include "../views/shared/header.php";
    ?>
    <div class="view-wrapper">

        <!-- Container -->
        <div id="main-feed" class="container">

            <!-- Content placeholders at page load -->
            <!-- /html/partials/global/placeload/feed-page/feed-menu-shadow-dom.html -->
            <!-- this holds the animated content placeholders that show up before content -->
            <?php include "../views/placeload/feed-page/feed-menu-shadow.php" ?>
            <!-- Feed page main wrapper -->
            <div id="activity-feed" class="view-wrap true-dom is-hidden">
                <div class="columns">
                    <!-- Left side column -->
                    <div class="column is-3 is-hidden-mobile">
                        <!-- Feed menu -->
                        <div class="feed-menu-v1">
                            <ul class="main-menu">
                                <li class="is-active">
                                    <a>
                                        <i data-feather="activity"></i>
                                        <span>Feed</span>
                                        <span class="close-icon">
                                                <i data-feather="chevron-right"></i>
                                            </span>
                                    </a>
                                    <ul class="submenu">
                                        <li class="is-subactive">
                                            <a>Trending <span class="tag">4</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                        <li>
                                            <a>Following</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- <li>
                                    <a>
                                        <i data-feather="help-circle"></i>
                                        <span>Questions</span>
                                        <span class="close-icon">
                                                <i data-feather="chevron-right"></i>
                                            </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home</a>
                                        </li>
                                        <li>
                                            <a>My Questions</a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="youtube"></i>
                                        <span>Videos</span>
                                        <span class="close-icon">
                                                <i data-feather="chevron-right"></i>
                                            </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Home<span class="tag">7</span></a>
                                        </li>
                                        <li>
                                            <a>Suggested</a>
                                        </li>
                                        <li>
                                            <a>My Channel</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="shopping-cart"></i>
                                        <span>Shopping</span>
                                        <span class="close-icon">
                                                <i data-feather="chevron-right"></i>
                                            </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>Trending<span class="tag">2</span></a>
                                        </li>
                                        <li>
                                            <a>Popular<span class="tag">5</span></a>
                                        </li>
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a>
                                        <i data-feather="music"></i>
                                        <span>Music</span>
                                        <span class="close-icon">
                                                <i data-feather="chevron-right"></i>
                                            </span>
                                    </a>
                                    <ul class="submenu">
                                        <li>
                                            <a>My Products</a>
                                        </li>
                                        <li>
                                            <a>Trending<span class="tag">6</span></a>
                                        </li>
                                        <li>
                                            <a>Popular</a>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- /Left side column -->

                    <!-- Middle column -->
                    <div class="column is-6">

                        <!-- Publishing Area -->
                        <?php
                            include("../views/pages/feed/widgets/compose-card-widget.php");
                        ?>
                        <!-- Post 1 -->
                        <!-- POST #1 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-1.php");
                        ?>
                        <!-- /POST #1 -->
                        <!-- POST #2 -->
                        <?php
                            include("../views/pages/feed/posts/video-link-post.php");
                        ?>
                        <!-- /POST #2 -->
                        <!-- POST #3 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-multiple.php");
                        ?>
                        <!-- /POST #3 -->
                        <!-- POST #4 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-4.php");
                        ?>
                        <!-- /POST #4 -->
                        <!-- POST #5 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-3.php");
                        ?>
                        <!-- /POST #5 -->
                        <!-- POST #6 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-2.php");
                        ?>
                        <!-- /POST #6 -->
                        <!-- POST #7 -->
                        <?php
                            include("../views/pages/feed/posts/normal-link-post.php");
                        ?>
                        <!-- /POST #7 -->
                        <!-- POST #8 -->
                        <?php
                            include("../views/pages/feed/posts/feed-post-text-only.php");
                        ?>
                        <!-- /POST #8 -->
                        <!-- Load more posts -->
                        <div class=" load-more-wrap has-text-centered">
                            <a href="#" class="load-more-button">Load More</a>
                        </div>
                        <!-- /Load more posts -->

                    </div>
                    <!-- /Middle column -->

                    <!-- Right side column -->
                    <div class="column is-3">

                        <!-- Stories widget -->
                        <?php
                            include("../views/pages/feed/widgets/stories-widget.php");
                        ?>
                        <!-- Birthday widget -->
                        <?php
                            include("../views/pages/feed/widgets/birthday-widget.php");
                        ?>
                        <!-- Suggested friends widget -->
                        <?php
                            include("../views/pages/feed/widgets/suggested-friends-widget.php");
                        ?>
                        <!-- New job widget (optional) -->
                        <?php
                            // include("../views/pages/feed/widgets/new-job-widget.php");
                        ?>
                    </div>
                    <!-- /Right side column -->
                </div>
            </div>
            <!-- /Feed page main wrapper -->
        </div>
        <!-- /Container -->

        <!-- Create group modal in compose card -->
        <?php
        include "../views/modals/create-group-modal.php";
        ?>
        <!-- Albums onboarding modal -->
        <?php
        include "../views/modals/album-help-modal.php";
        ?>

        <!-- Album upload modal -->
        <?php
            include "../views/modals/albums-modal.php";
        ?>
        <!-- Live video onboarding modal -->
        <?php
            // include("../views/modals/video-help-modal.php");
        ?>
        <!-- Live video modal -->
        <?php
        // include "../views/modals/video-stream-modal.php";
        ?>

        <!-- Share from feed modal -->
        <!-- /partials/pages/feed/modals/share-modal.html -->
        <?php
            include("../views/modals/share-modal.php");
        ?>
        <!-- No Stream modal -->
        <!-- /partials/pages/feed/modals/no-stream-modal.html -->
        <?php
            // include("../views/modals/no-stream-modal.php");
        ?>
        <!-- Google places Lib -->
        <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU&libraries=places"></script>
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

    <script src="../assets/js/webcam.js"></script>
    <script src="../assets/js/compose.js"></script>
    <script src="../assets/js/autocompletes.js"></script>

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