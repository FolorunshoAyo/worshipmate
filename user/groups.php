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

    <title> Worshipmate | Groups</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />

    <?php
        include_once("../views/embeds/head-embed.php");
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
        <div id="groups" class="container">

            <!--Groups-->
            <div class="groups-grid">

                <div class="grid-header">
                    <div class="header-inner">
                        <h2>Groups</h2>
                        <div class="header-actions">
                            <div class="buttons">
                                <a href="#" class="button is-solid accent-button raised">New Group</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="columns is-multiline">
                    <!--Group-->
                    <?php
                        include("../views/pages/group/group-item.php");
                    ?>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">64 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/2.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/2.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Cooking</span>
                                <h3 class="box-title">Grandma's cake and cookies oven</h3>
                                <span class="box-members">
                                        <a href="#">12.9k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">21 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/3.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/3.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Fashion</span>
                                <h3 class="box-title">The house of casual fashionistas</h3>
                                <span class="box-members">
                                        <a href="#">40.7k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">2 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/4.jpg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/4.jpg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Fashion</span>
                                <h3 class="box-title">Tales of fire, ice, and flying dragons</h3>
                                <span class="box-members">
                                        <a href="#">2.3k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="17" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">78 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/5.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/5.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Sports</span>
                                <h3 class="box-title">Passionates of mountain trekking and adventure</h3>
                                <span class="box-members">
                                        <a href="#">6.1k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">45 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/6.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/6.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Lifestyle</span>
                                <h3 class="box-title">Keep your life balanced - for remote workers</h3>
                                <span class="box-members">
                                        <a href="#">78.5k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">68 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/7.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/7.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Entertainment</span>
                                <h3 class="box-title">Latest straming releases and reviews</h3>
                                <span class="box-members">
                                        <a href="#">489.3k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">14 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/8.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/8.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Food</span>
                                <h3 class="box-title">Creative and healthy recipes for grown ups</h3>
                                <span class="box-members">
                                        <a href="#">19.1k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">7 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/9.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/9.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Food</span>
                                <h3 class="box-title">House of the Beer Experts Society</h3>
                                <span class="box-members">
                                        <a href="#">3.7k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/ken.jpg" data-user-popover="14" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">13 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/10.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/10.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Movies</span>
                                <h3 class="box-title">Zombie movies fans (only the good ones)</h3>
                                <span class="box-members">
                                        <a href="#">36.3k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">183 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/11.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/11.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Music</span>
                                <h3 class="box-title">Seventies and Eighties music classics</h3>
                                <span class="box-members">
                                        <a href="#">135.2k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="17" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">44 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/12.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/12.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Music</span>
                                <h3 class="box-title">Electro beats, Drum n' Bass & Jungle</h3>
                                <span class="box-members">
                                        <a href="#">112.6k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">98 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/13.jpg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/13.jpg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Art</span>
                                <h3 class="box-title">XVI - XIX European classic paintings</h3>
                                <span class="box-members">
                                        <a href="#">112.6k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="0" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="14" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">1 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/14.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/14.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Books</span>
                                <h3 class="box-title">Book lovers association of Kansas</h3>
                                <span class="box-members">
                                        <a href="#">1.2k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/nelly.png" data-user-popover="9" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">21 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/15.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/15.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Finance</span>
                                <h3 class="box-title">Cryptocurrency exchange and discussion group</h3>
                                <span class="box-members">
                                        <a href="#">119.3k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">3 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/16.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/16.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Books</span>
                                <h3 class="box-title">Scary stories of Edgar A. Poe & HP Lovecraft</h3>
                                <span class="box-members">
                                        <a href="#">12.2k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="17" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">16 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/17.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/17.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Travel</span>
                                <h3 class="box-title">Train trips accross Europe and Asia</h3>
                                <span class="box-members">
                                        <a href="#">200.7k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">8 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/18.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/18.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Automotive</span>
                                <h3 class="box-title">The Milwaukee automotive pit stop </h3>
                                <span class="box-members">
                                        <a href="#">2.8k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="14" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">21 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/19.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/19.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Architecture</span>
                                <h3 class="box-title">Modern architecture of yesterday</h3>
                                <span class="box-members">
                                        <a href="#">65.4k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                    <!--Group-->
                    <div class="column is-3">
                        <article class="group-box">
                            <div class="box-info-hover">
                                <i data-feather="heart"></i>
                                <div class="box-clock-info">
                                    <i data-feather="message-circle" class="box-clock"></i>
                                    <span class="box-time">21 new</span>
                                </div>

                            </div>
                            <div class="box-img has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/20.jpeg"></div>
                            <a href="#" class="box-link">
                                <div class="box-img--hover has-background-image" data-background="https://via.placeholder.com/940x650" data-demo-background="../assets/img/demo/groups/20.jpeg"></div>
                            </a>
                            <div class="box-info">
                                <span class="box-category">Art</span>
                                <h3 class="box-title">The amateur painters association</h3>
                                <span class="box-members">
                                        <a href="#">11k members</a>
                                        <div class="members-preview">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="5" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                            <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                        </div>
                                    </span>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Load more groups -->
                <div class=" load-more-wrap narrow-top has-text-centered">
                    <a href="#" class="load-more-button">Load More</a>
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