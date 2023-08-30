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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>Worshipmate | Questions | Statistics</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
    include("../views/embeds/head-embed.php");
    ?>
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
        <!-- /html/partials/pages/questions/questions-nav-menu.html -->
        <?php
         include("../views/pages/questions/questions-nav-menu.php");
        ?>

        <!-- Question wrap -->
        <div class="questions-wrap is-smaller">
            <!-- Container -->
            <div class="container">
                <!-- /html/partials/global/placeload/questions/questions-shadow-dom-stats.html -->
                <div id="questions-shadow-dom-stats" class="columns">
                    <div class="column is-3">
                        <!-- /html/partials/global/placeload/placeloads/questions-menu-placeload.html -->
                        <div class="placeload is-bold questions-menu-placeload">
                            <div class="inner-wrap">
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-6">
                        <!-- /html/partials/global/placeload/placeloads/questions-stats-placeload.html -->
                        <div class="placeload questions-stats-placeload is-header">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                    <div class="content-shape loads"></div>
                                </div>
                            </div>
                        </div>

                        <div class="placeload questions-stats-placeload is-carousel">
                            <div class="grid-title">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="placeload-grid">
                                <div class="grid-item">
                                    <div class="img loads"></div>
                                    <div class="shapes">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="img loads"></div>
                                    <div class="shapes">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="grid-item">
                                    <div class="img loads"></div>
                                    <div class="shapes">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="placeload questions-stats-placeload is-activity">
                            <div class="activity-title">
                                <div class="content-shape loads"></div>
                            </div>
                            <div class="unit-list">
                                <div class="unit">
                                    <div class="img loads"></div>
                                    <div class="unit-meta">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="unit">
                                    <div class="img loads"></div>
                                    <div class="unit-meta">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                                <div class="unit">
                                    <div class="img loads"></div>
                                    <div class="unit-meta">
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                        <div class="content-shape loads"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <!-- /html/partials/global/placeload/placeloads/questions-side-placeload.html -->
                        <div class="placeload questions-side-placeload">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                        <!-- /html/partials/global/placeload/placeloads/questions-side-placeload.html -->
                        <div class="placeload questions-side-placeload">
                            <div class="inner-wrap">
                                <div class="img loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                                <div class="content-shape loads"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns true-dom is-hidden">
                    <div class="column is-3">
                        <!-- /html/partials/pages/questions/questions-menu.html -->
                        <?php
                            include("../views/pages/questions/questions-menu.php");
                        ?>
                    </div>
                    <div class="column is-6">
                        <!-- user stats -->
                        <div class="stats-wrapper">
                            <div class="stats-header">
                                <div class="avatar-wrapper">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="" />
                                    <div class="badge">
                                        <i data-feather="check"></i>
                                    </div>
                                </div>
                                <div class="user-info">
                                    <h4>Jenna Davis</h4>
                                    <p>From Melbourne</p>
                                    <a class="button is-follow">Follow</a>
                                </div>
                                <div class="main-stats">
                                    <div class="stat-block">
                                        <h4>Questions</h4>
                                        <p>1337</p>
                                    </div>
                                    <div class="stat-block is-centered">
                                        <h4>Followers</h4>
                                        <p>618</p>
                                    </div>
                                    <div class="stat-block">
                                        <h4>Following</h4>
                                        <p>72</p>
                                    </div>
                                </div>
                            </div>

                            <div class="achievements">
                                <div class="header">
                                    <h3>Achievements</h3>
                                </div>

                                <div class="achievements-carousel-wrap">
                                    <div class="achievements-loader is-active">
                                        <div class="loader is-loading"></div>
                                    </div>

                                    <div class="achievements-carousel">
                                        <div class="achievement has-text-centered">
                                            <img class="light-image" src="../assets/img/icons/questions/upvoted.svg" alt="" />
                                            <img class="dark-image" src="../assets/img/icons/questions/upvoted-dark.svg" alt="" />
                                            <h3>Upvoted</h3>
                                            <p>A reward for community leaders.</p>
                                        </div>
                                        <div class="achievement has-text-centered">
                                            <img class="light-image" src="../assets/img/icons/questions/accurate.svg" alt="" />
                                            <img class="dark-image" src="../assets/img/icons/questions/accurate-dark.svg" alt="" />
                                            <h3>Accurate</h3>
                                            <p>A very high rate of best answers.</p>
                                        </div>
                                        <div class="achievement has-text-centered">
                                            <img class="light-image" src="../assets/img/icons/questions/gunslinger.svg" alt="" />
                                            <img class="dark-image" src="../assets/img/icons/questions/gunslinger-dark.svg" alt="" />
                                            <h3>Gun Slinger</h3>
                                            <p>Answers people fast as hell!</p>
                                        </div>
                                        <div class="achievement has-text-centered">
                                            <img class="light-image" src="../assets/img/icons/questions/rookie.svg" alt="" />
                                            <img class="dark-image" src="../assets/img/icons/questions/rookie-dark.svg" alt="" />
                                            <h3>Rookie</h3>
                                            <p>Posted at least 50 questions</p>
                                        </div>
                                        <div class="achievement has-text-centered">
                                            <img class="light-image" src="../assets/img/icons/questions/contributor.svg" alt="" />
                                            <img class="dark-image" src="../assets/img/icons/questions/contributor-dark.svg" alt="" />
                                            <h3>Contributor</h3>
                                            <p>Posted at least 250 questions</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="quick-activity">
                                <div class="header">
                                    <h3>Activity</h3>
                                </div>

                                <div class="activity-list">
                                    <div class="activity-item is-best">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Elise Walker</span>
                                            <span>Just asked
                                                <a>Is there a way to quickly convert a project from Angular
                                                    to React?</a></span>
                                            <small>42 minutes ago</small>
                                        </div>
                                    </div>

                                    <div class="activity-item">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Dan Walker</span>
                                            <span>Marked <a>your answer</a> as the best answer to his
                                                question.</span>
                                            <small>1 hour ago</small>
                                        </div>
                                    </div>

                                    <div class="activity-item">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Daniel Wellington</span>
                                            <span>Replied to
                                                <a>Is there a cheatsheet listing all available browser
                                                    polyfills?</a></span>
                                            <small>3 hours ago</small>
                                        </div>
                                    </div>

                                    <div class="activity-item is-best">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Lana Henrikssen</span>
                                            <span>Marked <a>your answer</a> as the best answer to her
                                                question.</span>
                                            <small>5 hours ago</small>
                                        </div>
                                    </div>

                                    <div class="activity-item">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/placeholder-m.jpg" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Hank Robson</span>
                                            <span>Replied to
                                                <a>Is there a cheatsheet listing all available browser
                                                    polyfills?</a></span>
                                            <small>5 hours ago</small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Load more -->
                                <div class="load-more-wrap has-text-centered">
                                    <a href="#" class="load-more-button">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column is-3">
                        <div class="questions-side-card">
                            <img class="light-image" src="../assets/img/icons/questions/help.svg" alt="" />
                            <img class="dark-image" src="../assets/img/icons/questions/help-dark.svg" alt="" />
                            <h4>Help center</h4>
                            <p>
                                Having trouble? Please search our
                                <a class="standard-link">Help Center</a> for a quick answer to your
                                problem.
                            </p>
                        </div>

                        <div class="questions-side-card">
                            <img class="light-image" src="../assets/img/icons/questions/assistance.svg" alt="" />
                            <img class="dark-image" src="../assets/img/icons/questions/assistance-dark.svg" alt="" />
                            <h4>24/7 Support</h4>
                            <p>
                                Our Help Center didn't help? Please contact our 24/7
                                <a class="standard-link">Customer Assistance</a> hotline.
                            </p>
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
    <script src="../assets/js/questions.js"></script>

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