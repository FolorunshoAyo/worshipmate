<?php
require_once dirname(__DIR__) . '/core/Database.php';
require_once dirname(__DIR__) . '/models/User.php';
require_once dirname(__DIR__) . '/controllers/AuthController.php';

// $authController->checkUserSession();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title> Worshipmate | Notifications</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include_once("../views/embeds/head-embed.php");
    ?>
    <style>
        .top-single-header{
            max-width: 1000px;
            margin: 20px auto;
        }

        /* Notifications styling */
        .top-single-header h2 {
            font-family: montserrat, sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #393a4f;
        }

        body.is-dark .top-single-header h2 {
            color: #fafafa
        }

        .notifications-content {
            max-width: 1000px;
            margin: 0 auto;
        }

        .notification {
            display: flex;
            align-items: center;
            padding: 20px 10px; 
            box-shadow: 0 0 8px 0 rgba(0,0,0,.12);
        }

        .notification:not(:last-child){
            margin-bottom: 1rem;
        }

        .notification.is-read{
            background-color: transparent;
        }

        .notification .image{
            position: relative;
            flex: 0 0 80px;
        }

        .notification img {
            display: block;
            max-width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .notification .image .icon{
            position: absolute;
            bottom: 0;
            right: 0;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #fff;
        }
        
        .notification .image .icon svg{
            height: 15px;
            width: 15px;
            stroke: #a2a5b9;
            stroke-width: 1.6px;
        }

        .notification .meta {
            margin-left: 10px;
        }

        .notification .meta span {
            display: block;
            font-size: 1.2rem;
            color: #707298;
        }

        .notification .meta span:first-child strong{
            color: #393a4f;
            font-weight: 400;
        }

        .notification .meta span:last-child {
            font-weight: 400;
            color: #707298;
            font-size: 1rem;
        }

        .notification .meta span:first-child a{
            color: #344258;
            text-decoration: none;
        }

        .notification .meta span:first-child a:hover{
            color: #5596e6;
        }

        @media screen and (max-width: 768px){
            .notification .meta span{
                font-size: 1rem;
            }
            .notification .meta span:last-child{
                font-size: .8rem;
            }
        }
    </style>
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

        <!-- Container -->
        <div id="notifications-shadow-dom-single" class="columns" style="margin-top: 30px; display: none;">
            <div class="column">
                <div class="placeload questions-single-placeload is-card">
                    <div class="inner-wrap">
                        <div class="card-head">
                            <div class="img loads"></div>
                            <div class="content-shape loads"></div>
                        </div>
                        <div class="content-shape is-body loads"></div>
                        <div class="content-shape is-body loads"></div>
                        <div class="content-shape is-body loads"></div>
                    </div>
                </div>

                <div class="placeload questions-single-placeload is-card">
                    <div class="inner-wrap">
                        <div class="card-head">
                            <div class="img loads"></div>
                            <div class="content-shape loads"></div>
                        </div>
                        <div class="content-shape is-body loads"></div>
                        <div class="content-shape is-body loads"></div>
                        <div class="content-shape is-body loads"></div>
                    </div>
                </div>
            </div>
        </div>

        <!--Top Bar-->
        <div class="top-single-header has-text-left">
            <h2>Notifications</h2>
        </div>
        <div class="columns true-dom">
            <div class="column">
                <div class="notifications-content">
                    <div class="notifications-block">
                        <h3>New</h3>
                        <div class="notification">
                            <div class="image">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/david.jpg" alt="">
                                <div class="icon">
                                    <i data-feather="message-square"></i>
                                </div>
                            </div>
                            <div class="meta">
                                <span><strong>David Kim</strong> commented on <a href="#">your post</a></span>
                                <span>54 minutes ago</span>
                            </div>
                        </div>
                        <div class="notification">
                            <div class="image">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/stella.jpg" alt="">
                                <div class="icon">
                                    <i data-feather="youtube"></i>
                                </div>
                            </div>
                            <div class="meta">
                                <span><strong>Stella Bergmann</strong> shared a <a href="#">new video</a> on your wall</span>
                                <span>30 minutes ago</span>
                            </div>
                        </div>
                        <div href="#" class="notification">
                            <div class="image">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" alt="">
                                <div class="icon">
                                    <i data-feather="image"></i>
                                </div>
                            </div>
                            <div class="meta">
                                <span><strong>Elise Walker</strong> shared an <a href="#">image</a> with you an 2 other people.</span>
                                <span>50 minutes ago</span>
                            </div>
                        </div>
                        <h3>Earlier</h3>
                        <div class="notification">
                            <div class="image">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/daniel.jpg" alt="">
                                <div class="icon">
                                    <i data-feather="heart"></i>
                                </div>
                            </div>
                            <div class="meta">
                                <span><strong>Daniel Wellington</strong> liked your <a href="#">profile.</a></span>
                                <span>1 hour ago</span>
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