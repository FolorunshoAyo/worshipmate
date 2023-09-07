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

    <title>Worshipmate | Single Question</title>
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
        <!-- /html/partials/pages/questions/questions-nav-single.html -->
        <div class="questions-nav">
            <div class="inner">
                <div class="container">
                    <div class="question-summary">
                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="" />
                        <div class="meta">
                            <h4>How can I handle photos with javascript?</h4>
                            <span>Dan Walker | 2 day ago</span>
                        </div>
                        <div class="dropdown is-spaced is-accent is-right dropdown-trigger">
                            <div>
                                <div class="button">
                                    <i data-feather="more-vertical"></i>
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="message-circle"></i>
                                            <div class="media-content">
                                                <h3>My Questions</h3>
                                                <small>All questions you posted.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="hexagon"></i>
                                            <div class="media-content">
                                                <h3>My Groups</h3>
                                                <small>View the groups you are part of.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="delete"></i>
                                            <div class="media-content">
                                                <h3>Unsolved</h3>
                                                <small>View unsolved questions.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="disc"></i>
                                            <div class="media-content">
                                                <h3>Solved</h3>
                                                <small>View solved questions.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider" />
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="message-square"></i>
                                            <div class="media-content">
                                                <h3>Ask</h3>
                                                <small>Post a new question.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Question wrap -->
        <div class="questions-wrap is-smaller">
            <!-- Container -->
            <div class="container">
                <div class="question-content">
                    <!-- /html/partials/global/placeload/questions/questions-shadow-dom-single.html -->
                    <div id="questions-shadow-dom-single" class="columns">
                        <div class="column">
                            <!--Top Bar-->
                            <div class="top-single-header has-text-right">
                                <a href="question-home" class="button is-solid grey-button is-rounded">Back To Questions</a>
                            </div>
                            <!-- /html/partials/global/placeload/placeloads/questions-single-placeload.html -->
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

                    <div class="columns true-dom is-hidden">
                        <div class="column">
                            <!-- Question content -->
                            <div class="question-content">
                                <!--Top Bar-->
                                <div class="top-single-header has-text-right">
                                    <a href="question-home" class="button is-solid grey-button is-rounded">Back To Questions</a>
                                </div>
                                <!-- Main question -->
                                <div class="question-block">
                                    <!-- Title -->
                                    <h2 class="question-title">
                                        How can I handle photos with javascript?
                                    </h2>
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
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At
                                            eum nihili facit; Quacumque enim ingredimur, in aliqua
                                            historia vestigium ponimus. Duo Reges: constructio interrete.
                                            Proclivi currit oratio. Quae contraria sunt his, malane? Quod
                                            quidem nobis non saepe contingit. Hoc loco tenere se Triarius
                                            non potuit.
                                        </p>
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
                                <!-- Main answer -->
                                <div class="answer-block is-best">
                                    <!-- Author -->
                                    <div class="answer-author">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Elise Walker
                                                <small class="best-tag">Best Answer</small></span>
                                            <span>1 day ago</span>
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="answer-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At
                                            eum nihili facit; Quacumque enim ingredimur, in aliqua
                                            historia vestigium ponimus. Duo Reges: constructio interrete.
                                            Proclivi currit oratio.
                                        </p>
                                        <p>First install this:</p>
                                        <p class="code">npm install photo_module_js - - save</p>
                                        <p>Then configure your photos:</p>
                                        <p class="code">
                                            $var product = this.getProduct.productDetails;
                                            <br />$var photoUrl = product.mainInmage.photoUrl; <br />for
                                            (var i = 0; i &lt; photoUrl.length; i++) { //do your stuff
                                            here }
                                        </p>
                                        <p>You can also check the documentation:</p>
                                        <p>
                                            <a class="standard-link">https://worshipmate/guides/ecommerce/products/docs</a>
                                        </p>
                                    </div>
                                    <!-- Footer -->
                                    <div class="answer-footer">
                                        <div class="upvote">
                                            <div class="upvote-icon">
                                                <i data-feather="check"></i>
                                            </div>
                                            <span>Upvoted 56 times</span>
                                        </div>
                                        <div class="report">
                                            <div class="report-icon">
                                                <i data-feather="alert-octagon"></i>
                                            </div>
                                            <span>Report Answer</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other answer -->
                                <div class="answer-block">
                                    <!-- Author -->
                                    <div class="answer-author">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>David Kim</span>
                                            <span>1 day ago</span>
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="answer-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At
                                            eum nihili facit; Quacumque enim ingredimur, in aliqua
                                            historia vestigium ponimus. Duo Reges: constructio interrete.
                                            Proclivi currit oratio.
                                        </p>
                                        <p>First install this:</p>
                                        <p class="code">npm install photo_module_js - - save</p>
                                        <p>Check this link:</p>
                                        <p>
                                            <a class="standard-link">https://worshipmate/questions/1856456</a>
                                        </p>
                                    </div>
                                    <!-- Footer -->
                                    <div class="answer-footer">
                                        <div class="upvote">
                                            <div class="upvote-icon">
                                                <i data-feather="check"></i>
                                            </div>
                                            <span>Upvoted 5 times</span>
                                        </div>
                                        <div class="report">
                                            <div class="report-icon">
                                                <i data-feather="alert-octagon"></i>
                                            </div>
                                            <span>Report Answer</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Other answer -->
                                <div class="answer-block">
                                    <!-- Author -->
                                    <div class="answer-author">
                                        <div class="avatar-wrap">
                                            <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="" />
                                            <div class="badge">
                                                <i data-feather="check"></i>
                                            </div>
                                        </div>
                                        <div class="meta">
                                            <span>Elise Walker</span>
                                            <span>1 day ago</span>
                                        </div>
                                    </div>
                                    <!-- Content -->
                                    <div class="answer-text">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. At
                                            eum nihili facit; Quacumque enim ingredimur, in aliqua
                                            historia vestigium ponimus. Duo Reges: constructio interrete.
                                            Proclivi currit oratio.
                                        </p>
                                        <p>It would ne nice to be more specific about it.</p>
                                        <p>Any suggestions?</p>
                                    </div>
                                    <!-- Footer -->
                                    <div class="answer-footer">
                                        <div class="upvote">
                                            <div class="upvote-icon">
                                                <i data-feather="check"></i>
                                            </div>
                                            <span>Upvoted once</span>
                                        </div>
                                        <div class="report">
                                            <div class="report-icon">
                                                <i data-feather="alert-octagon"></i>
                                            </div>
                                            <span>Report Answer</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Load more answers -->
                                <div class="load-more-wrap has-text-centered">
                                    <a href="#" class="load-more-button">Load More</a>
                                </div>
                            </div>

                            <!-- Other random questions -->
                            <div class="other-questions">
                                <!-- Title -->
                                <h2 class="other-title">Other people asked</h2>
                                <!-- Other question -->
                                <div class="other-question">
                                    <div class="avatar-wrap">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="" />
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a>I'd like to learn a js framework, any ideas?</a>
                                        <span>David Kim | 1 day ago</span>
                                    </div>
                                </div>
                                <!-- Other question -->
                                <div class="other-question">
                                    <div class="avatar-wrap">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="" />
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a>Trouble running with Kubernetes + Docker</a>
                                        <span>Elise Walker | 3 days ago</span>
                                    </div>
                                </div>
                                <!-- Other question -->
                                <div class="other-question">
                                    <div class="avatar-wrap">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="" />
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a>Is it worth buying the new Surface tablet?</a>
                                        <span>Lana Henrikssen | 7 days ago</span>
                                    </div>
                                </div>
                                <!-- Other question -->
                                <div class="other-question">
                                    <div class="avatar-wrap">
                                        <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="" />
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                    <div class="meta">
                                        <a>How much should I charge for freelance design?</a>
                                        <span>Edward Mayers | a month ago</span>
                                    </div>
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