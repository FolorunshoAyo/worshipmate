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

    <title> Worshipmate | Profile About</title>

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
            <div id="profile-about" class="view-wrap is-headless">
                <div class="columns is-multiline no-margin">
                    <!-- Left side column -->
                    <div class="column is-paddingless">
                        <!-- Timeline Header -->
                        <?php
                        include("../views/pages/profile/timeline/timeline-header.php");
                        ?>
                    </div>

                </div>

                <div class="column">

                    <!-- About sections -->
                    <div class="profile-about side-menu">
                        <div class="left-menu">
                            <div class="left-menu-inner">
                                <div class="menu-item is-active" data-content="overview-content">
                                    <div class="menu-icon">
                                        <i class="mdi mdi-progress-check"></i>
                                        <span>Overview</span>
                                    </div>
                                </div>
                                <div class="menu-item" data-content="personal-content">
                                    <div class="menu-icon">
                                        <i class="mdi mdi-apps"></i>
                                        <span>Personal Info</span>
                                    </div>
                                </div>
                                <div class="menu-item" data-content="education-content">
                                    <div class="menu-icon">
                                        <i class="mdi mdi-school"></i>
                                        <span>Education</span>
                                    </div>
                                </div>
                                <div class="menu-item" data-content="job-content">
                                    <div class="menu-icon">
                                        <i class="mdi mdi-briefcase-plus"></i>
                                        <span>Jobs</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-content">
                            <div id="overview-content" class="content-section is-active">
                                <div class="columns">
                                    <div class="column">
                                        <!-- Work block -->
                                        <div class="flex-block">
                                            <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/vector/icons/logos/slicer.svg" alt="" data-page-popover="4">
                                            <div class="flex-block-meta">
                                                <span>Works at <a>Slicer</a></span>
                                                <a class="action-link">Edit your professional info</a>
                                            </div>
                                            <div class="go-button">
                                                <i data-feather="arrow-right"></i>
                                            </div>
                                        </div>
                                        <!-- Education block -->
                                        <div class="flex-block">
                                            <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/vector/icons/logos/brent.svg" alt="" data-page-popover="6">
                                            <div class="flex-block-meta">
                                                <span>Studied at <a>Brent University</a></span>
                                                <a class="action-link">Edit your education info</a>
                                            </div>
                                            <div class="go-button">
                                                <i data-feather="arrow-right"></i>
                                            </div>
                                        </div>
                                        <!-- Location block -->
                                        <div class="flex-block">
                                            <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/vector/icons/logos/la.svg" alt="" data-page-popover="8">
                                            <div class="flex-block-meta">
                                                <span>Lives in <a>Los Angeles, CA</a></span>
                                                <a class="action-link">Edit your location</a>
                                            </div>
                                            <div class="go-button">
                                                <i data-feather="arrow-right"></i>
                                            </div>
                                        </div>
                                        <!-- Family block -->
                                        <div class="flex-block">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                            <div class="flex-block-meta">
                                                <span>Married to <a>Dan Walker</a></span>
                                                <a class="action-link">Edit your situation</a>
                                            </div>
                                            <div class="go-button">
                                                <i data-feather="arrow-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="about-summary">
                                            <div class="content">
                                                <h3>About Me</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliter homines, aliter philosophos loqui putas oportere? Duo
                                                    enim genera quae erant, fecit tria. Iubet igitur nos Pythius Apollo noscere nosmet ipsos. Hoc simile tandem est?
                                                </p>
                                                <p>Eam tum adesse, cum dolor omnis absit; Duo Reges: constructio interrete. </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="education-content" class="content-section">

                                <div id="education-glider" class="slider-timeline about-glider">
                                    <!--Timeline Item-->
                                    <?php
                                    include("../views/pages/profile/about/timeline-item.php");
                                    ?>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/drop.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/drop.svg" data-page-popover="10">
                                            </div>
                                        </div>
                                        <h3>Internship</h3>
                                        <p>Drop Cosmetics</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            May 2016
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/quick-fashion.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/quick-fashion.svg" data-page-popover="11">
                                            </div>
                                        </div>
                                        <h3>Internship</h3>
                                        <p>Quick Fashion</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Oct 2015
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/brent.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/brent.svg" data-page-popover="6">
                                            </div>
                                        </div>
                                        <h3>Bachelor Degree</h3>
                                        <p>Brent University</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Jul 2015
                                        </div>
                                    </div>
                                </div>

                                <div id="slider-dots-education-glider" class="dots"></div>
                            </div>

                            <div id="job-content" class="content-section">
                                <!-- Timeline section -->
                                <div id="jobs-glider" class="slider-timeline about-glider">
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/slicer.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/slicer.svg" data-page-popover="4">
                                            </div>
                                        </div>
                                        <h3>Artistic Director</h3>
                                        <p>Slicer</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Aug 2019
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/cssninja.png">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/avatars/hanzo.svg" data-page-popover="5">
                                            </div>
                                        </div>
                                        <h3>Artistic Director</h3>
                                        <p>Css Ninja</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Jan 2019
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/lipflow.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/lipflow.svg" data-page-popover="9">
                                            </div>
                                        </div>
                                        <h3>Head of Sales</h3>
                                        <p>Lipflow</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            May 2018
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/drop.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/drop.svg" data-page-popover="10">
                                            </div>
                                        </div>
                                        <h3>Manager</h3>
                                        <p>Drop Cosmetics</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Oct 2018
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/imdb.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/metamovies.svg" data-page-popover="9">
                                            </div>
                                        </div>
                                        <h3>Intern</h3>
                                        <p>Metamovies</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            May 2018
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/quick-fashion.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/quick-fashion.svg" data-page-popover="9">
                                            </div>
                                        </div>
                                        <h3>Intern</h3>
                                        <p>Quick Fashion</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Feb 2018
                                        </div>
                                    </div>
                                    <!--Timeline Item-->
                                    <div class="timeline-item">
                                        <div class="image-container">
                                            <img src="https://via.placeholder.com/800x600" alt="" data-demo-src="assets/img/demo/unsplash/popovers/pages/nuclearjs.jpg">
                                            <div class="logo-container">
                                                <img src="https://via.placeholder.com/150x150" alt="" data-demo-src="assets/img/vector/icons/logos/nuclearjs.svg" data-page-popover="9">
                                            </div>
                                        </div>
                                        <h3>Intern</h3>
                                        <p>Nuclearjs</p>
                                        <div class="more">
                                            <p>Lorem ipsum sit dolor amet is a dummy text used by typographers.</p>
                                        </div>
                                        <div class="date">
                                            Jan 2018
                                        </div>
                                    </div>
                                </div>

                                <div id="slider-dots-jobs-glider" class="dots"></div>
                            </div>
                            <!-- Personal tab -->
                            <div id="personal-content" class="content-section">
                                <!-- Friends about card -->
                                <?php
                                include("../views/pages/profile/about/photos-about-card.php");
                                ?>
                                <!-- Photos about card -->
                                <?php
                                include("../views/pages/profile/about/photos-about-card.php");
                                ?>
                                <!-- Videos about card -->
                                <?php
                                include("../views/pages/profile/about/videos-about-card.php");
                                ?>
                                <!-- Places about card -->
                                <?php
                                include("../views/pages/profile/about/places-about-card.php");
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
                        <img src="assets/img/vector/logo/friendkit.svg" alt="">
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
    <script src="assets/js/app.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
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

    <!-- Landing page js -->

    <!-- Signup page js -->

    <!-- Feed pages js -->

    <!-- profile js -->
    <script src="assets/js/profile.js"></script>

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