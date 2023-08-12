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

    <title> Worshipmate | Group Photos</title>
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
            <div id="pages-photos" class="view-wrap is-headless">
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
                    <div class="column">
                        <div class="box-heading">
                            <div class="dropdown photos-dropdown is-spaced is-accent dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <span>All Pictures</span>
                                        <i data-feather="chevron-down"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="tag"></i>
                                                <div class="media-content">
                                                    <h3>Tagged Photos</h3>
                                                    <small>Photos whith this user tagged.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="clock"></i>
                                                <div class="media-content">
                                                    <h3>Recent</h3>
                                                    <small>View most recent photos.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="heart"></i>
                                                <div class="media-content">
                                                    <h3>Popular</h3>
                                                    <small>View popular photos.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="book-open"></i>
                                                <div class="media-content">
                                                    <h3>Albums</h3>
                                                    <small>See all albums.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="button-wrap">
                                <button type="button" class="button is-active">Recent</button>
                                <button type="button" class="button">Albums</button>
                            </div>
                        </div>

                        <div class="image-grid-wrap">
                            <div class="image-grid">

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/5.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 23, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/3.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 19, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/1.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 17, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/6.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 15, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/2.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 12, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/8.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 12, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-3 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/7.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 11, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/4.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 09, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/9.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 06, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/10.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 04, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/11.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Aug 02, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/12.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 29, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/13.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 26, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/14.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 24, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-3 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/15.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 23, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/16.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 21, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <!--Grid Row-->
                                <div class="image-row">
                                    <!--Photo-->
                                    <div class="flex-2 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/17.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 19, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/18.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 19, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <!--Photo-->
                                    <div class="flex-1 has-background-image" data-background="https://via.placeholder.com/1600x900" data-demo-background="../assets/img/demo/pages/posts/19.jpg">
                                        <div class="overlay"></div>
                                        <div class="image-owner">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/vector/icons/logos/fastpizza.svg" alt="">
                                            <div class="name">Fast Pizza</div>
                                        </div>
                                        <div class="photo-time">Jul 17, 2019</div>
                                        <a class="photo-like">
                                            <div class="inner">
                                                <div class="like-overlay"></div>
                                                <i data-feather="heart"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Load more photos -->
                            <div class=" load-more-wrap has-text-centered">
                                <a href="#" class="load-more-button">Load More</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Change cover image modal -->
        <!--html/partials/pages/profile/timeline/modals/change-cover-modal.html-->
        <div id="change-cover-modal" class="modal change-cover-modal is-medium has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Update Cover</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Placeholder -->
                        <div class="selection-placeholder">
                            <div class="columns">
                                <div class="column is-6">
                                    <!-- Selection box -->
                                    <div class="selection-box modal-trigger" data-modal="upload-crop-cover-modal">
                                        <div class="box-content">
                                            <img src="../assets/img/illustrations/profile/upload-cover.svg" alt="">
                                            <div class="box-text">
                                                <span>Upload</span>
                                                <span>From your computer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-6">
                                    <!-- Selection box -->
                                    <div class="selection-box modal-trigger" data-modal="user-photos-modal">
                                        <div class="box-content">
                                            <img src="../assets/img/illustrations/profile/change-cover.svg" alt="">
                                            <div class="box-text">
                                                <span>Choose</span>
                                                <span>From your photos</span>
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
        <!-- Change profile pic modal -->
        <!--html/partials/pages/profile/timeline/modals/change-profile-pic-modal.html-->
        <div id="change-profile-pic-modal" class="modal change-profile-pic-modal is-medium has-light-bg">
            <div class="modal-background"></div>
            <div class="modal-content">

                <div class="card">
                    <div class="card-heading">
                        <h3>Update Profile Picture</h3>
                        <!-- Close X button -->
                        <div class="close-wrap">
                            <span class="close-modal">
                                    <i data-feather="x"></i>
                                </span>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Placeholder -->
                        <div class="selection-placeholder">
                            <div class="columns">
                                <div class="column is-6">
                                    <!-- Selection box -->
                                    <div class="selection-box modal-trigger" data-modal="upload-crop-profile-modal">
                                        <div class="box-content">
                                            <img src="../assets/img/illustrations/profile/change-profile.svg" alt="">
                                            <div class="box-text">
                                                <span>Upload</span>
                                                <span>From your computer</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column is-6">
                                    <!-- Selection box -->
                                    <div class="selection-box modal-trigger" data-modal="user-photos-modal">
                                        <div class="box-content">
                                            <img src="../assets/img/illustrations/profile/upload-profile.svg" alt="">
                                            <div class="box-text">
                                                <span>Choose</span>
                                                <span>From your photos</span>
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
        <!-- Custom photo lightbox -->
        <!--html/partials/pages/profile/timeline/modals/custom-profile-lightbox.html-->
        <div class="custom-profile-lightbox">
            <div class="lightbox-inner">
                <div class="image-side">
                    <div class="image-side-inner">
                        <div class="image-wrap">
                            <div class="image-loader is-active">
                                <div class="loader is-loading"></div>
                            </div>
                            <div class="meta-overlay"></div>
                            <div class="meta-block">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Frater et T. Duo Reges: constructio interrete. Summae mihi
                                    videtur inscitiae. Esse enim, nisi eris, non potes.</h3>
                                <p>Uploaded on <var id="lightbox-time"></var></p>
                            </div>
                            <div class="action-block">
                                <a class="action-button">
                                    <i data-feather="tag"></i>
                                </a>
                                <a class="action-button">
                                    <i data-feather="map-pin"></i>
                                </a>
                                <a class="action-button">
                                    <i data-feather="arrow-down"></i>
                                </a>
                                <a class="action-button">
                                    <i data-feather="more-vertical"></i>
                                </a>
                            </div>
                            <img id="lightbox-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/3.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="sidebar-side">
                    <div class="comments-loader is-active">
                        <div class="loader is-loading"></div>
                    </div>
                    <div class="header">
                        <img id="lightbox-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/dan.jpg" alt="">
                        <div class="user-meta">
                            <span id="lightbox-username">Dan Walker</span>
                            <span><small>2 hours ago</small></span>
                        </div>
                        <button type="button" class="button close-lightbox">Close</button>
                        <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                            <div>
                                <div class="button">
                                    <i data-feather="more-vertical"></i>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="tag"></i>
                                            <div class="media-content">
                                                <h3>Tag Friends</h3>
                                                <small>Tag friends in this picture.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="arrow-down"></i>
                                            <div class="media-content">
                                                <h3>Download</h3>
                                                <small>Download this picture.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="share-2"></i>
                                            <div class="media-content">
                                                <h3>Share Picture</h3>
                                                <small>Share this picture.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="message-circle"></i>
                                            <div class="media-content">
                                                <h3>Send In Chat</h3>
                                                <small>Send in a chat message.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="flag"></i>
                                            <div class="media-content">
                                                <h3>Report</h3>
                                                <small>Report for inappropriate content.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="inner-content">
                        <div class="live-stats">
                            <div class="social-count">
                                <div class="likes-count">
                                    <i data-feather="heart"></i>
                                    <span>12</span>
                                </div>
                                <div class="comments-count">
                                    <i data-feather="message-square"></i>
                                    <span>8</span>
                                </div>
                            </div>
                            <div class="social-count ml-auto">
                                <div class="views-count">
                                    <span>8</span>
                                    <span class="views"><small>comments</small></span>
                                </div>
                            </div>
                        </div>
                        <div class="actions">
                            <div class="action">
                                <i data-feather="thumbs-up"></i>
                                <span>Like</span>
                            </div>
                            <div class="action">
                                <i data-feather="message-square"></i>
                                <span>Comment</span>
                            </div>
                        </div>
                    </div>

                    <div class="comments-list has-slimscroll">
                        <div class="media is-comment">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/dan.jpg" alt="" data-user-popover="1">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Dan Walker</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>28m</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment is-nested">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/david.jpg" alt="" data-user-popover="4">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">David Kim</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>15m</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>0</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/rolf.jpg" alt="" data-user-popover="17">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Rolf Krupp</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing
                                    elit. Proin ornare magna eros.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>9h</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>1</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment is-nested">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" alt="" data-user-popover="6">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Elise Walker</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>8h</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment is-nested">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/rolf.jpg" alt="" data-user-popover="17">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Rolf Krupp</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>7h</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment is-nested">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" alt="" data-user-popover="6">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Elise Walker</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>6h</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="media is-comment">
                            <figure class="media-left">
                                <p class="image is-32x32">
                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/lana.jpeg" alt="" data-user-popover="14">
                                </p>
                            </figure>
                            <div class="media-content">
                                <div class="username">Lana Henrikssen</div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros. Consectetur adipiscing
                                    elit.</p>
                                <div class="comment-actions">
                                    <a href="javascript:void(0);" class="is-inverted">Like</a>
                                    <span>10h</span>
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>7</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="comment-controls">
                        <div class="controls-inner">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                            <div class="control">
                                <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea>
                            </div>
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