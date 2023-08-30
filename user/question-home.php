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

    <title>Worshipmate | Questions Home</title>
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
                <!-- Categories -->
                <div class="tabs question-tabs is-centered">
                    <ul>
                        <li class="is-active"><a>Coding</a></li>
                        <li><a>Gaming</a></li>
                        <li><a>Fashion</a></li>
                        <li><a>Travel</a></li>
                        <li><a>Books</a></li>
                        <li><a>Movies</a></li>
                        <li><a href="questions-categories.html">All</a></li>
                    </ul>
                </div>

                <!-- /html/partials/global/placeload/questions/questions-shadow-dom-home.html -->
                <div id="questions-shadow-dom-home" class="columns">
                    <div class="column">
                        <!-- /html/partials/global/placeload/placeloads/questions-home-placeload.html -->
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

                        <div class="placeload is-bold questions-single-placeload is-header is-spaced">
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
                    </div>
                </div>

                <div class="columns true-dom is-hidden">
                    <div class="column">
                        <div class="question-content">
                            <!-- Question -->
                            <div class="question-block">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">What's a mutation observer?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="" />
                                    <div class="meta">
                                        <span>Milly Augustine</span>
                                        <span>54 minutes ago</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">javascript</span>
                                        <span class="tag">mutations</span>
                                        <span class="tag">observers</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>4 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>2 Answers</span>
                                </div>
                            </div>
                            <!-- Question -->
                            <div class="question-block is-top-spaced">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">Is there a simple guide for Sass Mixins?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/brian.jpg" data-user-popover="19" alt="" />
                                    <div class="meta">
                                        <span>Brian Stevenson</span>
                                        <span>3 hours ago</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus. Duo Reges: constructio interrete. Proclivi
                                        currit oratio. Quae contraria sunt his, malane? Quod quidem
                                        nobis non saepe contingit.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">stylesheets</span>
                                        <span class="tag">sass</span>
                                        <span class="tag">mixins</span>
                                        <span class="tag">bourbon</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>12 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>9 Answers</span>
                                </div>
                            </div>
                            <!-- Question -->
                            <div class="question-block is-top-spaced">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">Is React compatible with jQuery?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="" />
                                    <div class="meta">
                                        <span>Lana Henrikssen</span>
                                        <span>5 hours ago</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus. Duo Reges: constructio interrete. Proclivi
                                        currit oratio. Quae contraria sunt his, malane? Quod quidem
                                        nobis non saepe contingit.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">reactjs</span>
                                        <span class="tag">javascript</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>19 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>23 Answers</span>
                                </div>
                            </div>
                            <!-- Question -->
                            <div class="question-block is-top-spaced">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">X-Wing animation with CSS only?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="" />
                                    <div class="meta">
                                        <span>Azzouz El Paytoun</span>
                                        <span>11 hours ago</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus. Duo Reges: constructio interrete. Proclivi
                                        currit oratio. Quae contraria sunt his, malane? Quod quidem
                                        nobis non saepe contingit.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">css</span>
                                        <span class="tag">animation</span>
                                        <span class="tag">starwars</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>48 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>12 Answers</span>
                                </div>
                            </div>
                            <!-- Question -->
                            <div class="question-block is-top-spaced">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">Difference between fluid and responsive layouts?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="" />
                                    <div class="meta">
                                        <span>Daniel Wellington</span>
                                        <span>Yesterday</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">webdesign</span>
                                        <span class="tag">responsive</span>
                                        <span class="tag">fluid</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>31 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>25 Answers</span>
                                </div>
                            </div>
                            <!-- Question -->
                            <div class="question-block is-top-spaced">
                                <!-- Title -->
                                <a href="questions-single.html" class="question-title is-link">How can I handle photos with javascript?</a>
                                <!-- Author -->
                                <div class="question-author">
                                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="" />
                                    <div class="meta">
                                        <span>Dan Walker</span>
                                        <span>2 days ago</span>
                                    </div>
                                </div>
                                <!-- Content -->
                                <div class="question-text">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. At eum
                                        nihili facit; Quacumque enim ingredimur, in aliqua historia
                                        vestigium ponimus. Duo Reges: constructio interrete. Proclivi
                                        currit oratio. Quae contraria sunt his, malane? Quod quidem
                                        nobis non saepe contingit. Hoc loco tenere se Triarius non
                                        potuit.
                                    </p>
                                    <div class="tags">
                                        <span class="tag">javascript</span>
                                        <span class="tag">images</span>
                                    </div>
                                </div>
                                <!-- Footer -->
                                <div class="question-footer">
                                    <div class="likes">
                                        <div class="like-icon">
                                            <i data-feather="heart"></i>
                                        </div>
                                        <span>8 Likes</span>
                                    </div>
                                    <div class="report">
                                        <div class="report-icon">
                                            <i data-feather="alert-octagon"></i>
                                        </div>
                                        <span>Report Topic</span>
                                    </div>
                                </div>
                                <div class="answers-count">
                                    <span>5 Answers</span>
                                </div>
                            </div>

                            <!-- Load more -->
                            <div class="load-more-wrap has-text-centered">
                                <a href="#" class="load-more-button">Load More</a>
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