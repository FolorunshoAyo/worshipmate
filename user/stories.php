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

    <title> Worshipmate | Stories Home</title>
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

    <div class="view-wrapper is-full">

        <div class="stories-wrapper is-home">

            <!-- /html/partials/pages/stories/stories-sidebar.html -->
            <div class="stories-sidebar is-active">
                <div class="stories-sidebar-inner">
                    <div class="user-block">
                        <a class="close-stories-sidebar is-hidden">
                            <i data-feather="x"></i>
                        </a>
                        <div class="avatar-wrap">
                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                            <div class="badge">
                                <i data-feather="check"></i>
                            </div>
                        </div>
                        <h4>Jenna Davis</h4>
                        <p>Melbourne, AU</p>
                        <div class="user-stats">
                            <div class="stat-block">
                                <span>Followers</span>
                                <span>2.3K</span>
                            </div>
                            <div class="stat-block">
                                <span>Following</span>
                                <span>2.3K</span>
                            </div>
                        </div>
                    </div>
                    <div class="user-menu">
                        <div class="user-menu-inner has-slimscroll">
                            <div class="menu-block">
                                <ul>
                                    <li class="is-active">
                                        <a>
                                            <i data-feather="grid"></i>
                                            <span>Feed</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="search"></i>
                                            <span>Explore</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="bell"></i>
                                            <span>Notifications</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="mail"></i>
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="separator"></div>
                            <div class="menu-block">
                                <ul>
                                    <li>
                                        <a>
                                            <i data-feather="send"></i>
                                            <span>Direct</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="bar-chart-2"></i>
                                            <span>Stats</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="settings"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="separator"></div>
                            <div class="menu-block">
                                <ul>
                                    <li>
                                        <a>
                                            <i data-feather="lock"></i>
                                            <span>Privacy</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i data-feather="life-buoy"></i>
                                            <span>Help</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Stories -->
            <div class="inner-wrapper">
                <a class="mobile-sidebar-trigger is-home-v2">
                    <i data-feather="menu"></i>
                </a>

                <!-- Stories content -->
                <div class="stories-content">
                    <div class="section-title main-section-title">
                        <h2>Stories</h2>
                        <a class="view-all">View All</a>
                    </div>

                    <div class="stories-container">
                        <div class="container-inner">
                            <a class="story modal-trigger" data-modal="new-story-modal">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                    <div class="add-overlay">
                                        <i data-feather="plus"></i>
                                    </div>
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="4" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="12" alt="">
                                </div>
                            </a>
                            <a class="story">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="section-title">
                        <h2>Feed</h2>

                        <div class="dropdown is-spaced is-right is-accent dropdown-trigger">
                            <div>
                                <div class="button is-rounded">
                                    This week &#x25BE
                                </div>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="wind"></i>
                                            <div class="media-content">
                                                <h3>Today</h3>
                                                <small>View today's posts.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="calendar"></i>
                                            <div class="media-content">
                                                <h3>This Week</h3>
                                                <small>View this week's posts.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="archive"></i>
                                            <div class="media-content">
                                                <h3>This Month</h3>
                                                <small>View this month's posts.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <hr class="dropdown-divider">
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Close Friends</h3>
                                                <small>Restrict to close friends.</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <div class="media">
                                            <i data-feather="heart"></i>
                                            <div class="media-content">
                                                <h3>Popular</h3>
                                                <small>Show popular posts.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="stories-feed">
                        <div class="columns is-multiline">

                            <div class="column is-4 is-half-tablet">
                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/3.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/3.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            </div>
                                            <span>Stella Bergmann</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>43</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>12</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!--Feed item-->
                                <div class="story-feed-item">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/17.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/17.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                            </div>
                                            <span>Azzouz El Paytoun</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>55</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>7</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!--Feed item-->
                                <div class="story-feed-item is-large">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/23.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/23.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                            </div>
                                            <span>Jenna Davis</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>155</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>49</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!--Feed item-->
                                <div class="story-feed-item">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/26.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/26.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/lana.jpeg" data-user-popover="10" alt="">
                                            </div>
                                            <span>Lana Henrikssen</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>99</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>23</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/37.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/37.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="12" alt="">
                                            </div>
                                            <span>Mike Lasalle</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>14</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="column is-4 is-half-tablet">
                                <!--Feed item-->
                                <div class="story-feed-item">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/4.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/4.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                            </div>
                                            <span>Dan Walker</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>18</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>2</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-large">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/33.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/33.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                            </div>
                                            <span>Elise Walker</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>55</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>9</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/18.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/18.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            </div>
                                            <span>Rolf Krupp</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>12</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-large">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/36.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/36.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">
                                            </div>
                                            <span>Gaelle Morris</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>265</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>56</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/11.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/11.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                            </div>
                                            <span>David Kim</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>459</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>154</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="column is-4 is-half-tablet">
                                <!--Feed item-->
                                <div class="story-feed-item is-large">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/21.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/21.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                            </div>
                                            <span>Bobby Brown</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>65</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>17</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/32.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/32.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                            </div>
                                            <span>Milly Augustine</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>76</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>32</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/24.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/24.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            </div>
                                            <span>Stella Bergmann</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>89</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>44</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/35.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/35.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                            </div>
                                            <span>Dan Walker</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>55</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>5</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <!--Feed item-->
                                <div class="story-feed-item is-medium">
                                    <a href="https://via.placeholder.com/1600x900" data-demo-href="../assets/img/demo/unsplash/20.jpg" data-fancybox data-caption="">
                                        <img class="featured-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/20.jpg" alt="">
                                    </a>
                                    <a class="item-meta">
                                        <div class="user-info">
                                            <div class="small-avatar">
                                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                            </div>
                                            <span>Jenna Davis</span>
                                        </div>
                                        <div class="item-stats">
                                            <div class="stat-item">
                                                <i data-feather="heart"></i>
                                                <span>197</span>
                                            </div>
                                            <div class="stat-item">
                                                <i data-feather="message-circle"></i>
                                                <span>78</span>
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

        <!-- /html/partials/pages/stories/modals/new-story-modal.html -->
        <?php
        include("../views/pages/stories/modals/new-story-modal.php");
        ?>
        <!-- /html/partials/pages/stories/modals/video-story-modal.html -->
        <?php
        include("../views/pages/stories/modals/video-story-modal.php");
        ?>
        <!-- /html/partials/pages/stories/modals/image-story-modal.html -->
        <?php
        include("../views/pages/stories/modals/image-story-modal.php");
        ?>
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
    <script src="../assets/js/stories.js"></script>

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