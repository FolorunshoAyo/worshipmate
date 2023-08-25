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

    <title> Worshipmate | Friend Requests</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include_once("../views/embeds/head-embed.php");
    ?>
    <style>
        /* friend-requests styling */
        .top-single-header{
            max-width: 1000px;
            margin: 20px auto;
        }

        .top-single-header h2 {
            font-family: montserrat, sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #393a4f;
        }

        body.is-dark .top-single-header h2 {
            color: #fafafa
        }

        .requests-content {
            max-width: 1000px;
            margin: 0 auto;
        }

        .request-block {
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 20px; 
            box-shadow: 0 0 8px 0 rgba(0,0,0,.12);
        }

        .request-block:not(:last-child){
            margin-bottom: 20px;
        }

        .request-block img{
            flex: 0 0 80px;
            height: 80px;
            border-radius: 50%;
        }

        .request-block .meta{
            margin-left: 30px;
            flex: 1;
        }

        .request-block .meta div:not(:last-child){
            margin-bottom: 10px;
        }

        .request-block .meta .meta-head{
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: #393a4f;
        }   

        .request-block .meta .meta-head a{
            color: #000;
            font-size: .9rem;
            font-weight: 500;
            text-decoration: none;
        }

        .request-block .meta .meta-head a:hover{
            color: #5596e6;
        }

        .request-block .meta .mutual-friends-container,
        .request-block .meta .request-alert-message{
            font-size: .8rem;
        }

        .request-block .meta .action-container button{
            margin-bottom: 10px;
        }

        .request-block .meta .action-container button svg{
            margin-right: 10px;
        }

        body.is-dark .request-block .meta .meta-head a{
            color: #5596e6;
        }

        body.is-dark .request-block .meta .meta-head span,
        body.is-dark .request-block .meta .mutual-friends-container,
        body.is-dark .request-block .meta .request-alert-message{
            color: #fff;
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
        <div id="friend-requests-shadow-dom-single" style="display: none;" class="columns">
            <div class="column">
                <!-- /html/partials/global/placeload/placeloads/friend-requests-list-placeload.html -->
                <div class="placeload is-bold questions-single-placeload is-header">
                    <div class="inner-wrap">
                        <div class="content-shape loads"></div>
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
            <h2>Friend Requests (5)</h2>
        </div>
        <div class="columns true-dom">
            <div class="column">
                <div class="requests-content">
                    <div class="requests-block">
                        <div class="request-block">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/david.jpg" alt="">
                            <div class="meta">
                                <div class="meta-head">
                                    <a href="#">David Kim</a>
                                    <span>1d</span>
                                </div>
                                <div class="mutual-friends-container">
                                    Najeel verwick is a common friend
                                </div>
                                <div class="request-alert-message" style="display: none;">
                                    Request accepted/rejected
                                </div>
                                <div class="action-container">
                                    <button class="button is-solid primary-button raised">
                                        <i data-feather="user-plus"></i> Accept
                                    </button>
                                    <button class="button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i> Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="request-block">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/stella.jpg" alt="">
                            <div class="meta">
                                <div class="meta-head">
                                    <a href="#">Stella Bergmann</a>
                                    <span>2d</span>
                                </div>
                                <div class="mutual-friends-container">
                                    You have 4 common friends
                                </div>
                                <div class="request-alert-message" style="display: none;">
                                    Request accepted/rejected
                                </div>
                                <div class="action-container">
                                    <button class="button is-solid primary-button raised">
                                        <i data-feather="user-plus"></i> Accept
                                    </button>
                                    <button class="button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i> Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="request-block">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/daniel.jpg" alt="">
                            <div class="meta">
                                <div class="meta-head">
                                    <a href="#">Daniel Wellington</a>
                                    <span>5w</span>
                                </div>
                                <div class="mutual-friends-container">
                                    You have 8 common friends
                                </div>
                                <div class="request-alert-message" style="display: none;">
                                    Request accepted/rejected
                                </div>
                                <div class="action-container">
                                    <button class="button is-solid primary-button raised">
                                        <i data-feather="user-plus"></i> Accept
                                    </button>
                                    <button class="button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i> Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="request-block">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/bobby.jpg" alt="">
                            <div class="meta">
                                <div class="meta-head">
                                    <a href="#">Bobby Brown</a>
                                    <span>8w</span>
                                </div>
                                <div class="mutual-friends-container" style="display: none;">
                                    You have 5 common friends
                                </div>
                                <div class="request-alert-message" style="display: none;">
                                    Request accepted/rejected
                                </div>
                                <div class="action-container">
                                    <button class="button is-solid primary-button raised">
                                        <i data-feather="user-plus"></i> Accept
                                    </button>
                                    <button class="button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i> Reject
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="request-block">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" alt="">
                            <div class="meta">
                                <div class="meta-head">
                                    <a href="#">Elise Walker</a>
                                    <span>5w</span>
                                </div>
                                <div class="mutual-friends-container">
                                    You have 2 common friends
                                </div>
                                <div class="request-alert-message" style="display: none;">
                                    Request accepted/rejected
                                </div>
                                <div class="action-container">
                                    <button class="button is-solid primary-button raised">
                                        <i data-feather="user-plus"></i> Accept
                                    </button>
                                    <button class="button is-solid grey-button raised">
                                        <i data-feather="user-minus"></i> Reject
                                    </button>
                                </div>
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