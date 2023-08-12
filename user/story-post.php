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

    <title> Friendkit | Stories Home</title>
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
                <a class="mobile-sidebar-trigger is-story-post is-home-v2">
                    <i data-feather="menu"></i>
                </a>

                <!-- Story -->
                <div class="story-post-wrapper">
                    <div class="story-post">
                        <div class="post-title">
                            <h2>Hello from Sunset Beach</h2>
                            <!--Dropdown-->
                            <div class="dropdown is-spaced is-right is-accent dropdown-trigger">
                                <div>
                                    <div class="button is-rounded">
                                        @Stella &#x25BE
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
                        <div class="post-image-wrap">
                            <img class="post-image" src="https://via.placeholder.com/1600x900" data-demo-src="../assets/img/demo/unsplash/3.jpg" alt="">
                        </div>
                        <div class="post-meta">
                            <div class="post-author">
                                <div class="story-avatar">
                                    <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                </div>
                                <div class="meta">
                                    <span>Stella Bergmann</span>
                                    <span>2 hours ago</span>
                                </div>
                            </div>

                            <div class="post-stats">
                                <div class="stat-item">
                                    <i data-feather="heart"></i>
                                    <span>265</span>
                                </div>
                                <div class="stat-item">
                                    <i data-feather="message-circle"></i>
                                    <span>56</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-text content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quid de Pythagora? Quae est igitur
                                causa istarum angustiarum? Non risu potius quam oratione eiciendum? Duo Reges:
                                constructio interrete. An haec ab eo non dicuntur? Quae cum essent dicta, discessimus.
                            </p>

                            <p>At enim hic etiam dolore. Idem iste, inquam, de voluptate quid sentit? At enim sequor
                                utilitatem. Iam in altera philosophiae parte. Ut optime, secundum naturam affectum esse
                                possit. Hoc sic expositum dissimile est superiori. <b>#holidays</b> <b>#friends</b> <b>#chillout</b></p>
                        </div>
                        <div class="post-tags">
                            <div class="tags">
                                <span class="tag" data-user-popover="1">@Dan Walker</span>
                                <span class="tag" data-user-popover="6">@Elise Walker</span>
                                <span class="tag" data-user-popover="8">@Bobby Brown</span>
                            </div>
                        </div>
                        <div class="post-compose">
                            <div class="control">
                                <textarea class="textarea" placeholder="Post a comment..."></textarea>
                            </div>
                            <div class="compose-controls">
                                <img class="avatar" src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                <div class="compose-actions">
                                    <a class="action">
                                        <i data-feather="at-sign"></i>
                                    </a>
                                    <a class="action">
                                        <i data-feather="image"></i>
                                    </a>
                                    <a class="action">
                                        <i data-feather="paperclip"></i>
                                    </a>
                                </div>
                                <a class="button is-solid accent-button raised">Post Comment</a>
                            </div>
                        </div>

                        <div class="comments-wrap">
                            <div class="comments-count">
                                <h3>Comments (9)</h3>
                            </div>

                            <div class="media is-comment">
                                <div class="media-left">
                                    <div class="avatar-wrap is-smaller">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                        <div class="badge">
                                            <i data-feather="check"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-content">
                                    <div class="comment-meta">
                                        <h4><a>Dan Walker</a> <small> · 3 hours ago</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec
                                            ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit
                                            rutrum. Nunc in tempus turpis.</p>
                                    </div>
                                    <div class="comment-stats-wrap">
                                        <div class="comment-stats">
                                            <div class="stat is-likes">
                                                <i data-feather="thumbs-up"></i>
                                                <span>23</span>
                                            </div>
                                            <div class="stat is-dislikes">
                                                <i data-feather="thumbs-down"></i>
                                                <span>3</span>
                                            </div>
                                        </div>
                                        <div class="comment-actions">
                                            <a class="comment-action is-like">
                                                <i data-feather="thumbs-up"></i>
                                            </a>
                                            <a class="comment-action is-dislike">
                                                <i data-feather="thumbs-down"></i>
                                            </a>
                                            <a class="comment-action is-reply">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="nested-replies">
                                        <a class="header">
                                            <span>5 Replies</span>
                                            <i data-feather="chevron-down"></i>
                                        </a>
                                        <div class="nested-comments">
                                            <!--Nested comment -->
                                            <div class="media is-comment is-nested">
                                                <figure class="media-left">
                                                    <div class="avatar-wrap is-smaller">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/gaelle.jpeg" data-user-popover="11" alt="">
                                                    </div>
                                                </figure>
                                                <div class="media-content">
                                                    <div class="comment-meta">
                                                        <h4><a>Gaelle Morris</a> <small> · 30 minutes ago</small></h4>
                                                        <p><span class="mention">@Dan Walker</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.</p>
                                                    </div>
                                                    <div class="comment-stats-wrap">
                                                        <div class="comment-stats">
                                                            <div class="stat is-likes">
                                                                <i data-feather="thumbs-up"></i>
                                                                <span>2</span>
                                                            </div>
                                                            <div class="stat is-dislikes">
                                                                <i data-feather="thumbs-down"></i>
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-actions">
                                                            <a class="comment-action is-like">
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a class="comment-action is-dislike">
                                                                <i data-feather="thumbs-down"></i>
                                                            </a>
                                                            <a class="comment-action is-reply">
                                                                <i data-feather="message-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Nested comment -->
                                            <div class="media is-comment is-nested">
                                                <figure class="media-left">
                                                    <div class="avatar-wrap is-smaller">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/rolf.jpg" data-user-popover="13" alt="">
                                                        <div class="badge">
                                                            <i data-feather="check"></i>
                                                        </div>
                                                    </div>
                                                </figure>
                                                <div class="media-content">
                                                    <div class="comment-meta">
                                                        <h4><a>Rolf Krupp</a> <small> · 50 minutes ago</small></h4>
                                                        <p><span class="mention">@Gaelle Morris</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non.</p>
                                                    </div>
                                                    <div class="comment-stats-wrap">
                                                        <div class="comment-stats">
                                                            <div class="stat is-likes">
                                                                <i data-feather="thumbs-up"></i>
                                                                <span>1</span>
                                                            </div>
                                                            <div class="stat is-dislikes">
                                                                <i data-feather="thumbs-down"></i>
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-actions">
                                                            <a class="comment-action is-like">
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a class="comment-action is-dislike">
                                                                <i data-feather="thumbs-down"></i>
                                                            </a>
                                                            <a class="comment-action is-reply">
                                                                <i data-feather="message-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Nested comment -->
                                            <div class="media is-comment is-nested">
                                                <figure class="media-left">
                                                    <div class="avatar-wrap is-smaller">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                                                    </div>
                                                </figure>
                                                <div class="media-content">
                                                    <div class="comment-meta">
                                                        <h4><a>Bobby Brown</a> <small> · 1 hour ago</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                    </div>
                                                    <div class="comment-stats-wrap">
                                                        <div class="comment-stats">
                                                            <div class="stat is-likes">
                                                                <i data-feather="thumbs-up"></i>
                                                                <span>5</span>
                                                            </div>
                                                            <div class="stat is-dislikes">
                                                                <i data-feather="thumbs-down"></i>
                                                                <span>1</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-actions">
                                                            <a class="comment-action is-like">
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a class="comment-action is-dislike">
                                                                <i data-feather="thumbs-down"></i>
                                                            </a>
                                                            <a class="comment-action is-reply">
                                                                <i data-feather="message-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Nested comment -->
                                            <div class="media is-comment is-nested">
                                                <figure class="media-left">
                                                    <div class="avatar-wrap is-smaller">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                                                    </div>
                                                </figure>
                                                <div class="media-content">
                                                    <div class="comment-meta">
                                                        <h4><a>Stella Bergmann</a> <small> · 2 hours ago</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec
                                                            ultricies elit blandit non.</p>
                                                    </div>
                                                    <div class="comment-stats-wrap">
                                                        <div class="comment-stats">
                                                            <div class="stat is-likes">
                                                                <i data-feather="thumbs-up"></i>
                                                                <span>0</span>
                                                            </div>
                                                            <div class="stat is-dislikes">
                                                                <i data-feather="thumbs-down"></i>
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-actions">
                                                            <a class="comment-action is-like">
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a class="comment-action is-dislike">
                                                                <i data-feather="thumbs-down"></i>
                                                            </a>
                                                            <a class="comment-action is-reply">
                                                                <i data-feather="message-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--Nested comment -->
                                            <div class="media is-comment is-nested">
                                                <figure class="media-left">
                                                    <div class="avatar-wrap is-smaller">
                                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/edward.jpeg" data-user-popover="5" alt="">
                                                    </div>
                                                </figure>
                                                <div class="media-content">
                                                    <div class="comment-meta">
                                                        <h4><a>Edward Mayers</a> <small> · 3 hours ago</small></h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec
                                                            ultricies elit blandit non.</p>
                                                    </div>
                                                    <div class="comment-stats-wrap">
                                                        <div class="comment-stats">
                                                            <div class="stat is-likes">
                                                                <i data-feather="thumbs-up"></i>
                                                                <span>6</span>
                                                            </div>
                                                            <div class="stat is-dislikes">
                                                                <i data-feather="thumbs-down"></i>
                                                                <span>0</span>
                                                            </div>
                                                        </div>
                                                        <div class="comment-actions">
                                                            <a class="comment-action is-like">
                                                                <i data-feather="thumbs-up"></i>
                                                            </a>
                                                            <a class="comment-action is-dislike">
                                                                <i data-feather="thumbs-down"></i>
                                                            </a>
                                                            <a class="comment-action is-reply">
                                                                <i data-feather="message-circle"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Comment -->
                            <div class="media is-comment">
                                <figure class="media-left">
                                    <div class="avatar-wrap is-smaller">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                    </div>
                                </figure>
                                <div class="media-content">
                                    <div class="comment-meta">
                                        <h4><a>Milly Augutine</a> <small> · 4 hours ago</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                    <div class="comment-stats-wrap">
                                        <div class="comment-stats">
                                            <div class="stat is-likes">
                                                <i data-feather="thumbs-up"></i>
                                                <span>8</span>
                                            </div>
                                            <div class="stat is-dislikes">
                                                <i data-feather="thumbs-down"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <div class="comment-actions">
                                            <a class="comment-action is-like">
                                                <i data-feather="thumbs-up"></i>
                                            </a>
                                            <a class="comment-action is-dislike">
                                                <i data-feather="thumbs-down"></i>
                                            </a>
                                            <a class="comment-action is-reply">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media is-comment">
                                <figure class="media-left">
                                    <div class="avatar-wrap is-smaller">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                    </div>
                                </figure>
                                <div class="media-content">
                                    <div class="comment-meta">
                                        <h4><a>Elise Walker</a> <small> · 5 hours ago</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec
                                            ultricies elit blandit non.</p>
                                    </div>
                                    <div class="comment-stats-wrap">
                                        <div class="comment-stats">
                                            <div class="stat is-likes">
                                                <i data-feather="thumbs-up"></i>
                                                <span>3</span>
                                            </div>
                                            <div class="stat is-dislikes">
                                                <i data-feather="thumbs-down"></i>
                                                <span>0</span>
                                            </div>
                                        </div>
                                        <div class="comment-actions">
                                            <a class="comment-action is-like">
                                                <i data-feather="thumbs-up"></i>
                                            </a>
                                            <a class="comment-action is-dislike">
                                                <i data-feather="thumbs-down"></i>
                                            </a>
                                            <a class="comment-action is-reply">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="media is-comment">
                                <figure class="media-left">
                                    <div class="avatar-wrap is-smaller">
                                        <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/placeholder-m.jpg" alt="">
                                    </div>
                                </figure>
                                <div class="media-content">
                                    <div class="comment-meta">
                                        <h4><a>John Doe</a> <small> · 5 hours ago</small></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec
                                            ultricies elit blandit non.</p>
                                    </div>
                                    <div class="comment-stats-wrap">
                                        <div class="comment-stats">
                                            <div class="stat is-likes">
                                                <i data-feather="thumbs-up"></i>
                                                <span>12</span>
                                            </div>
                                            <div class="stat is-dislikes">
                                                <i data-feather="thumbs-down"></i>
                                                <span>4</span>
                                            </div>
                                        </div>
                                        <div class="comment-actions">
                                            <a class="comment-action is-like">
                                                <i data-feather="thumbs-up"></i>
                                            </a>
                                            <a class="comment-action is-dislike">
                                                <i data-feather="thumbs-down"></i>
                                            </a>
                                            <a class="comment-action is-reply">
                                                <i data-feather="message-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Story post sidebar-->
                <div class="story-post-sidebar">
                    <div class="header">
                        <h2>You might like</h2>
                    </div>
                    <div class="related-posts">
                        <!--Related post-->
                        <a class="related-post">
                            <img class="post-image" src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/demo/unsplash/4.jpg" alt="">
                            <div class="meta">
                                <h3>Beaches you want to discover and experiment in 2020</h3>
                                <div class="user-line">
                                    <img src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                                    <span>Elise Walker</span>
                                </div>
                            </div>
                        </a>
                        <!--Related post-->
                        <a class="related-post">
                            <img class="post-image" src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/demo/unsplash/17.jpg" alt="">
                            <div class="meta">
                                <h3>Those shoes will make you feel so happy</h3>
                                <div class="user-line">
                                    <img src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/avatars/dan.jpg" data-user-popover="1" alt="">
                                    <span>Dan Walker</span>
                                </div>
                            </div>
                        </a>
                        <!--Related post-->
                        <a class="related-post">
                            <img class="post-image" src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/demo/unsplash/32.jpg" alt="">
                            <div class="meta">
                                <h3>Life is all about happiness, it's up to you to go for it</h3>
                                <div class="user-line">
                                    <img src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                                    <span>Milly Augustine</span>
                                </div>
                            </div>
                        </a>
                        <!--Related post-->
                        <a class="related-post">
                            <img class="post-image" src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/demo/unsplash/18.jpg" alt="">
                            <div class="meta">
                                <h3>My winter trip was absolutely fantastic</h3>
                                <div class="user-line">
                                    <img src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                                    <span>Jenna Davis</span>
                                </div>
                            </div>
                        </a>
                        <!--Related post-->
                        <a class="related-post">
                            <img class="post-image" src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/demo/unsplash/26.jpg" alt="">
                            <div class="meta">
                                <h3>8 Headsets of 2020 compared, check it out before buying</h3>
                                <div class="user-line">
                                    <img src="https://via.placeholder.com/250x250" data-demo-src="../assets/img/avatars/azzouz.jpg" data-user-popover="20" alt="">
                                    <span>Azzouz El Paytoun</span>
                                </div>
                            </div>
                        </a>
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