<div class="card is-post is-simple">
    <!-- Main wrap -->
    <div class="content-wrap">
        <!-- Header -->
        <div class="card-heading">
            <!-- User image -->
            <div class="user-block">
                <div class="image">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/bobby.jpg" data-user-popover="8" alt="">
                </div>
                <div class="user-info">
                    <a href="#">Bobby Brown</a>
                    <span class="time">July 26 2018, 11:14am</span>
                </div>
            </div>
            <!-- /partials/pages/feed/dropdowns/feed-post-dropdown.html -->
            <div class="dropdown is-spaced is-right is-neutral dropdown-trigger">
                <div>
                    <div class="button">
                        <i data-feather="more-vertical"></i>
                    </div>
                </div>
                <div class="dropdown-menu" role="menu">
                    <div class="dropdown-content">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="bookmark"></i>
                                <div class="media-content">
                                    <h3>Bookmark</h3>
                                    <small>Add this post to your bookmarks.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="bell"></i>
                                <div class="media-content">
                                    <h3>Notify me</h3>
                                    <small>Send me the updates.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="flag"></i>
                                <div class="media-content">
                                    <h3>Flag</h3>
                                    <small>In case of inappropriate content.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Header -->

        <!-- Post body -->
        <div class="card-body">
            <!-- Post body text -->
            <div class="post-text">
                <p>Today, when i was walking back home from my job, i figured that i should build the best social media template
                    in ThemeForest. As soon as i got back, i started working on this fresh and new project. Any suggestions
                    about where i could find some interesting resources for social media design?
                    <a href="#">#webdesign #socialmedia</a>
                <p>
            </div>
            <!-- Post actions -->
            <div class="post-actions">
                <!-- /partials/pages/feed/buttons/feed-post-actions.html -->
                <div class="like-wrapper">
                    <a href="javascript:void(0);" class="like-button">
                        <i class="mdi mdi-heart not-liked bouncy"></i>
                        <i class="mdi mdi-heart is-liked bouncy"></i>
                        <span class="like-overlay"></span>
                    </a>
                </div>

                <div class="fab-wrapper is-share">
                    <a href="javascript:void(0);" class="small-fab share-fab modal-trigger" data-modal="share-modal">
                        <i data-feather="link-2"></i>
                    </a>
                </div>

                <div class="fab-wrapper is-comment">
                    <a href="javascript:void(0);" class="small-fab">
                        <i data-feather="message-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /Post body -->

        <!-- Post footer -->
        <div class="card-footer">
            <!-- Followers -->
            <div class="likers-group">
                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/daniel.jpg" data-user-popover="3" alt="">
                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
            </div>
            <div class="likers-text">
                <p>
                    <a href="#">Daniel</a> and
                    <a href="#">Elise</a>
                </p>
                <p>liked this</p>
            </div>
            <!-- Post statistics -->
            <div class="social-count">
                <div class="likes-count">
                    <i data-feather="heart"></i>
                    <span>2</span>
                </div>
                <div class="shares-count">
                    <i data-feather="link-2"></i>
                    <span>0</span>
                </div>
                <div class="comments-count">
                    <i data-feather="message-circle"></i>
                    <span>0</span>
                </div>
            </div>
        </div>
        <!-- /Post footer -->
    </div>
    <!-- /Main wrap -->

    <!-- Post #6 comments -->
    <div class="comments-wrap is-hidden">
        <!-- Header -->
        <div class="comments-heading">
            <h4>
                Comments
                <small>(0)</small>
            </h4>
            <div class="close-comments">
                <i data-feather="x"></i>
            </div>
        </div>
        <!-- /Header -->

        <!-- Comments body -->
        <div class="comments-body has-slimscroll">
            <div class="comments-placeholder">
                <img src="../assets/img/icons/feed/bubble.svg" alt="">
                <h3>Nothing in here yet</h3>
                <p>Be the first to post a comment.</p>
            </div>
        </div>
        <!-- /Comments body -->

        <!-- Comments footer -->
        <div class="card-footer">
            <div class="media post-comment has-emojis">
                <!-- Textarea -->
                <div class="media-content">
                    <div class="field">
                        <p class="control">
                            <textarea class="textarea comment-textarea" rows="5" placeholder="Write a comment..."></textarea>
                        </p>
                    </div>
                    <!-- Additional actions -->
                    <div class="actions">
                        <div class="image is-32x32">
                            <img class="is-rounded" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" data-user-popover="0" alt="">
                        </div>
                        <div class="toolbar">
                            <div class="action is-auto">
                                <i data-feather="at-sign"></i>
                            </div>
                            <div class="action is-emoji">
                                <i data-feather="smile"></i>
                            </div>
                            <div class="action is-upload">
                                <i data-feather="camera"></i>
                                <input type="file">
                            </div>
                            <a class="button is-solid primary-button raised">Post Comment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Comments footer -->
    </div>
    <!-- /Post #6 comments -->
</div>