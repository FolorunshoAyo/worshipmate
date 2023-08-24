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

    <title> Worshipmate | Profile Friends</title>
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
            <div id="profile-friends" class="view-wrap is-headless">
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
                    <div class="column">
                        <div class="box-heading">
                            <div class="dropdown friends-dropdown is-spaced is-neutral dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <span>All Friends</span>
                                        <i data-feather="chevron-down"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="heart"></i>
                                                <div class="media-content">
                                                    <h3>Close Friends</h3>
                                                    <small>Your closest friends list.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="bell"></i>
                                                <div class="media-content">
                                                    <h3>Followed</h3>
                                                    <small>Friends you are following.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="coffee"></i>
                                                <div class="media-content">
                                                    <h3>Work relations</h3>
                                                    <small>Your work relations.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item modal-trigger" data-modal="albums-modal"">
                                                <div class=" media">
                                            <i data-feather="mail"></i>
                                            <div class="media-content">
                                                <h3>Friend Requests</h3>
                                                <small>Your pending friend requests.</small>
                                            </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="control heading-search">
                            <input type="text" class="input is-rounded" placeholder="Search Friends...">
                            <div class="search-icon">
                                <i data-feather="search"></i>
                            </div>
                        </div>
                    </div>

                    <!--Friends grid-->
                    <div class="friends-grid">
                        <div class="columns is-multiline">
                            <!--Friend item-->
                            <?php
                            include("../views/pages/profile/friends/friend-item.php");
                            ?>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                    </div>
                                    <h3>Dan Walker</h3>
                                    <p>From New York</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                    </div>
                                    <h3>Stella Bergmann</h3>
                                    <p>From Berlin</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                    </div>
                                    <h3>David Kim</h3>
                                    <p>From Chicago</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">
                                    </div>
                                    <h3>Daniel Wellington</h3>
                                    <p>From London</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                    </div>
                                    <h3>Nelly Schwartz</h3>
                                    <p>From Melbourne</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                    </div>
                                    <h3>Rolf Krupp</h3>
                                    <p>From Berlin</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/brian.jpg" data-user-popover="19" alt="">
                                    </div>
                                    <h3>Brian Stevenson</h3>
                                    <p>From San Diego</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                    </div>
                                    <h3>Bobby Brown</h3>
                                    <p>From Paris</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                    </div>
                                    <h3>Azzouz El Paytoun</h3>
                                    <p>From Montreal</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                    </div>
                                    <h3>Elise Walker</h3>
                                    <p>From London</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/aline.jpg" data-user-popover="16" alt="">
                                    </div>
                                    <h3>Aline Cambell</h3>
                                    <p>From Seattle</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="12" alt="">
                                    </div>
                                    <h3>Mike Lasalle</h3>
                                    <p>From Toronto</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/michael.jpg" data-user-popover="17" alt="">
                                    </div>
                                    <h3>Mike Donovan</h3>
                                    <p>From San Francisco</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
                                    </div>
                                    <h3>Lana Henrikssen</h3>
                                    <p>From Helsinki</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/leana.jpg" data-user-popover="15" alt="">
                                    </div>
                                    <h3>Leana Marks</h3>
                                    <p>From Nashville</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/ken.jpg" data-user-popover="14" alt="">
                                    </div>
                                    <h3>Ken Rogers</h3>
                                    <p>From Chicago</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">
                                    </div>
                                    <h3>Gaelle Morris</h3>
                                    <p>From Lyon</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                    </div>
                                    <h3>Edward Mayers</h3>
                                    <p>From Dublin</p>
                                </a>
                            </div>
                            <!--Friend item-->
                            <div class="column is-3">
                                <a class="friend-item has-text-centered">
                                    <div class="avatar-wrap">
                                        <div class="circle"></div>
                                        <div class="chat-button">
                                            <i data-feather="message-circle"></i>
                                        </div>
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/george.jpg" data-user-popover="18" alt="">
                                    </div>
                                    <h3>George A. Romero</h3>
                                    <p>From Los Angeles</p>
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