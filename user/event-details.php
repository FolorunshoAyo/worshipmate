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

    <title> Worshipmate | Event</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include("../views/embeds/head-embed.php");
    ?>
</head>

<body class="is-white">
    <!-- (noscript) -->
    <noscript>Javascript needs to be enabled to run this app</noscript>
    <!--    (noscript) -->

    <!-- Pageloader -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <div class="app-overlay"></div>

    <?php
        include("../views/shared/header.php");
    ?>

    <div class="view-wrapper is-full">

        <!--Wrapper-->
        <div class="event-page-wrapper">

            <!--Cover-->
            <div class="event-cover">
                <img class="cover-image" src="https://via.placeholder.com/1600x460" data-demo-src="../assets/img/demo/unsplash/55.jpg" alt="">
            </div>

            <!--Main infos-->
            <div class="event-content">
                <div class="event-head">
                    <div class="left">
                        <h2>Pool party with friends</h2>
                        <h3>5:00 PM - 11:00 PM</h3>
                        <div class="button-separator">
                            <i data-feather="chevron-right"></i>
                        </div>
                        <div class="info-block">
                            <div class="info-head">
                                <div class="event-icon">
                                    <i data-feather="calendar"></i>
                                </div>
                                <span>Scheduled on</span>
                            </div>
                            <div class="info-body">
                                <p>Saturday, Jul 21 2020</p>
                            </div>
                        </div>
                        <div class="info-block">
                            <div class="info-head">
                                <div class="event-icon">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <span>Location</span>
                            </div>
                            <div class="info-body">
                                <a>123 Gilmore Street, Lois Lane, CA</a>
                            </div>
                        </div>
                        <div class="info-block">
                            <div class="info-head">
                                <div class="event-icon">
                                    <i data-feather="share-2"></i>
                                </div>
                                <span>Share</span>
                            </div>
                            <div class="info-body">
                                <div class="socials">
                                    <a><i data-feather="facebook"></i></a>
                                    <a><i data-feather="twitter"></i></a>
                                    <a><i data-feather="linkedin"></i></a>
                                    <a><i data-feather="instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <h2>Subscribe Now</h2>
                        <div class="subscribe-block">
                            <p>Add this event to your calendar</p>
                            <button class="button is-solid primary-button raised">Add To Calendar</button>
                        </div>
                        <div class="condition has-text-centered">
                            <span>Or</span>
                        </div>
                        <div class="subscribe-block">
                            <p>Scan this QR code with your phone to automatically register for this event.</p>
                            <img src="https://cdn.futura-sciences.com/buildsv6/images/largeoriginal/f/6/2/f621f61ff6_50038379_codeqr-futura.jpg" alt="">
                        </div>
                    </div>
                </div>

                <!--Participants-->
                <div class="event-participants">
                    <div class="container-inner">
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="4" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="12" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                            </div>
                        </a>
                        <a class="participant">
                            <div class="participant-avatar">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                <div class="more-overlay">
                                    <span>+26</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!--Details-->
                <div class="event-details">
                    <!--Left Side-->
                    <div class="left">
                        <div class="details-block">
                            <h3>Event Details</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum id fugiunt, re eadem defendunt, quae
                                Peripatetici, verba. Scisse enim te quis coarguere possit? Quid de Platone aut de Democrito
                                loquar.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum id fugiunt, re eadem defendunt, quae
                                Peripatetici, verba. Scisse enim te quis coarguere possit? Quid de Platone aut de Democrito
                                loquar? Duo Reges: constructio interrete. Quod equidem non reprehendo; Bonum integritas
                                corporis.</p>
                        </div>

                        <div class="details-block">
                            <h3>Event Photos and Videos</h3>

                            <div class="video-block-wrapper">
                                <div id="video-embed" class="video-block-inner" data-url="https://www.youtube.com/watch?v=1neHf-ALfck">
                                    <div class="video-overlay"></div>
                                    <div class="playbutton">
                                        <div class="icon-play">
                                            <i data-feather="play"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="photo-group">
                                <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/54.jpg" data-fancybox data-caption="">
                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/54.jpg" alt="">
                                </a>
                                <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/7.jpg" data-fancybox data-caption="">
                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/7.jpg" alt="">
                                </a>
                                <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/4.jpg" data-fancybox data-caption="">
                                    <img src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!--Right side-->
                    <div class="right">
                        <div class="event-owner">
                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                            <div class="meta">
                                <span>Event organized by</span>
                                <span>Stella Bergmann</span>
                            </div>
                        </div>

                        <div class="side-block">
                            <div class="side-head">
                                <span>Phone Number</span>
                            </div>
                            <div class="side-body">
                                <a>+(1) 555-888-1265</a>
                            </div>
                        </div>

                        <div class="side-block">
                            <div class="side-head">
                                <span>Email Address</span>
                            </div>
                            <div class="side-body">
                                <a><span class="__cf_email__" data-cfemail="433037262f2f2203242f222e2c36313a6d202c">[email&#160;protected]</span></a>
                            </div>
                        </div>

                        <div class="side-block">
                            <div class="side-head">
                                <span>Website</span>
                            </div>
                            <div class="side-body">
                                <a>https://glamoury.co</a>
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
    <script src="../assets/js/events.js"></script>

    <!-- news js -->

    <!-- shop js -->

    <!-- inbox js -->

    <!-- settings js -->

    <!-- map page js -->

    <!-- elements page js -->
</body>

</html>