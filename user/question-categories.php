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

    <title>Worshipmate | Questions Categories</title>
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
                <div class="question-content is-large">
                    <!-- /html/partials/global/placeload/questions/questions-shadow-dom-categories.html -->
                    <div id="questions-shadow-dom-categories" class="columns">
                        <div class="column">
                            <div class="categories-header">
                                <h2>Categories</h2>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="Filter..." />
                                    <div class="search-icon">
                                        <i data-feather="search"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- /html/partials/global/placeload/placeloads/questions-categories-placeload.html -->
                            <div class="placeload is-bold questions-categories-placeload">
                                <div class="tile is-ancestor categories-tile-grid">
                                    <div class="tile is-vertical is-8">
                                        <div class="tile">
                                            <div class="tile is-parent is-vertical">
                                                <div class="tile is-child is-tile-placeload">
                                                    <div class="img loads"></div>
                                                    <div class="placeload-content">
                                                        <div class="content-shape loads"></div>
                                                        <div class="content-shape loads"></div>
                                                    </div>
                                                </div>
                                                <div class="tile is-child is-tile-placeload">
                                                    <div class="img loads"></div>
                                                    <div class="placeload-content">
                                                        <div class="content-shape loads"></div>
                                                        <div class="content-shape loads"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tile is-parent is-vertical">
                                                <div class="tile is-child is-tile-placeload">
                                                    <div class="img loads"></div>
                                                    <div class="placeload-content">
                                                        <div class="content-shape loads"></div>
                                                        <div class="content-shape loads"></div>
                                                    </div>
                                                </div>
                                                <div class="tile is-child is-tile-placeload">
                                                    <div class="img loads"></div>
                                                    <div class="placeload-content">
                                                        <div class="content-shape loads"></div>
                                                        <div class="content-shape loads"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tile is-parent">
                                            <div class="tile is-child is-tile-placeload is-card">
                                                <div class="img loads"></div>
                                                <div class="placeload-content">
                                                    <div class="content-shape loads"></div>
                                                    <div class="content-shape loads"></div>
                                                    <div class="content-shape loads"></div>
                                                    <div class="content-shape loads"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tile is-parent is-vertical">
                                        <div class="tile is-child is-tile-placeload">
                                            <div class="img loads"></div>
                                            <div class="placeload-content">
                                                <div class="content-shape loads"></div>
                                                <div class="content-shape loads"></div>
                                            </div>
                                        </div>
                                        <div class="tile is-child is-tile-placeload">
                                            <div class="img loads"></div>
                                            <div class="placeload-content">
                                                <div class="content-shape loads"></div>
                                                <div class="content-shape loads"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="columns true-dom is-hidden">
                        <div class="column">
                            <div class="categories-header">
                                <h2>Categories</h2>
                                <div class="control">
                                    <input class="input is-rounded" type="text" placeholder="Filter..." />
                                    <div class="search-icon">
                                        <i data-feather="search"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="tile is-ancestor categories-tile-grid">
                                <div class="tile is-vertical is-8">
                                    <div class="tile">
                                        <div class="tile is-parent is-vertical">
                                            <a class="tile is-child category-box is-primary">
                                                <img class="light-image" src="../assets/img/illustrations/questions/programming.svg" alt="" />
                                                <img class="dark-image" src="../assets/img/illustrations/questions/programming-dark.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Programming</h3>
                                                    <p>Talk about code and stuff</p>
                                                </div>
                                            </a>
                                            <a class="tile is-child category-box is-accent">
                                                <img src="../assets/img/illustrations/questions/reading.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Reading</h3>
                                                    <p>About books & Litterature</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tile is-parent is-vertical">
                                            <a class="tile is-child category-box is-accent">
                                                <img src="../assets/img/illustrations/questions/travel.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Travel</h3>
                                                    <p>Trips around the world</p>
                                                </div>
                                            </a>
                                            <a class="tile is-child category-box is-primary">
                                                <img src="../assets/img/illustrations/questions/gastronomy.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Gastronomy</h3>
                                                    <p>Food, drinks and beverages</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile is-parent">
                                        <a class="tile is-child category-box is-accent is-row">
                                            <img src="../assets/img/illustrations/questions/lifestyle.svg" alt="" />
                                            <div class="box-content">
                                                <h3 class="title is-6">Lifestyle</h3>
                                                <p>
                                                    Lorem ipsum sit dolor amet is a dummy text that is often
                                                    used by typographers and the web industry.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="tile is-parent is-vertical">
                                    <a class="tile is-child category-box is-accent is-taller">
                                        <img src="../assets/img/illustrations/questions/mobile-apps.svg" alt="" />
                                        <div class="box-content">
                                            <h3 class="title is-6">Mobile Apps</h3>
                                            <p>
                                                Lorem ipsum sit dolor amet is a dummy text that is often
                                                used by typographers and the web industry.
                                            </p>
                                        </div>
                                    </a>
                                    <a class="tile is-child category-box is-primary is-taller">
                                        <img src="../assets/img/illustrations/questions/social-media.svg" alt="" />
                                        <div class="box-content">
                                            <h3 class="title is-6">Social Media</h3>
                                            <p>
                                                Lorem ipsum sit dolor amet is a dummy text that is often
                                                used by typographers and the web industry.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="tile is-ancestor">
                                <div class="tile is-parent is-vertical">
                                    <a class="tile is-child category-box is-accent is-taller">
                                        <img class="light-image" src="../assets/img/illustrations/questions/blogging.svg" alt="" />
                                        <img class="dark-image" src="../assets/img/illustrations/questions/blogging-dark.svg" alt="" />
                                        <div class="box-content">
                                            <h3 class="title is-6">Blogging</h3>
                                            <p>
                                                Lorem ipsum sit dolor amet is a dummy text that is often
                                                used by typographers and the web industry.
                                            </p>
                                        </div>
                                    </a>
                                    <a class="tile is-child category-box is-primary is-taller">
                                        <img src="../assets/img/illustrations/questions/automotive.svg" alt="" />
                                        <div class="box-content">
                                            <h3 class="title is-6">Automotive</h3>
                                            <p>
                                                Lorem ipsum sit dolor amet is a dummy text that is often
                                                used by typographers and the web industry.
                                            </p>
                                        </div>
                                    </a>
                                </div>
                                <div class="tile is-vertical is-8">
                                    <div class="tile">
                                        <div class="tile is-parent is-vertical">
                                            <a class="tile is-child category-box is-primary">
                                                <img src="../assets/img/illustrations/questions/business.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Business</h3>
                                                    <p>Business ideas & stuff</p>
                                                </div>
                                            </a>
                                            <a class="tile is-child category-box is-accent">
                                                <img src="../assets/img/illustrations/questions/shopping.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Shopping</h3>
                                                    <p>Shopping & Good Deals</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="tile is-parent is-vertical">
                                            <a class="tile is-child category-box is-accent">
                                                <img src="../assets/img/illustrations/questions/wordpress.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">WordPress</h3>
                                                    <p>Discussions about WordPress</p>
                                                </div>
                                            </a>
                                            <a class="tile is-child category-box is-primary">
                                                <img src="../assets/img/illustrations/questions/sports.svg" alt="" />
                                                <div class="box-content">
                                                    <h3 class="title is-6">Sports & Fitness</h3>
                                                    <p>All about healthy lifestyles</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="tile is-parent">
                                        <a class="tile is-child category-box is-accent is-row">
                                            <img src="../assets/img/illustrations/questions/movies.svg" alt="" />
                                            <div class="box-content">
                                                <h3 class="title is-6">Movies</h3>
                                                <p>
                                                    Lorem ipsum sit dolor amet is a dummy text that is often
                                                    used by typographers and the web industry.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Load more Categories -->
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