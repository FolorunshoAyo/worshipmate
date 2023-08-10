<div id="videos-modal" class="modal videos-modal is-xxl has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">

        <div class="card">
            <div class="card-heading">
                <h3>Go live</h3>
                <div id="stop-stream" class="button is-solid accent-button is-hidden" onclick="stopWebcam();">
                    <i class="mdi mdi-video-off"></i>
                    Stop stream
                </div>
                <div id="start-stream" class="button is-solid accent-button" onclick="startWebcam();">
                    <i class="mdi mdi-video"></i>
                    Start stream
                </div>


                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                        <i data-feather="x"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <div class="inner">
                    <div class="left-section">
                        <div class="video-wrapper">
                            <div class="video-wrap">
                                <div id="live-indicator" class="live is-vhidden">Live</div>
                                <video id="video" width="400" height="240" controls autoplay></video>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <div class="header">
                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                            <div class="user-meta">
                                <span>Jenna Davis <small>is live</small></span>
                                <span><small>right now</small></span>
                            </div>
                            <button type="button" class="button">Follow</button>
                            <div class="dropdown is-spaced is-right dropdown-trigger">
                                <div>
                                    <div class="button">
                                        <i data-feather="more-vertical"></i>
                                    </div>
                                </div>
                                <div class="dropdown-menu" role="menu">
                                    <div class="dropdown-content">
                                        <div class="dropdown-item is-title">
                                            Who can see this ?
                                        </div>
                                        <a href="#" class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="globe"></i>
                                                <div class="media-content">
                                                    <h3>Public</h3>
                                                    <small>Anyone can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="users"></i>
                                                <div class="media-content">
                                                    <h3>Friends</h3>
                                                    <small>only friends can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="user"></i>
                                                <div class="media-content">
                                                    <h3>Specific friends</h3>
                                                    <small>Don't show it to some friends.</small>
                                                </div>
                                            </div>
                                        </a>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item">
                                            <div class="media">
                                                <i data-feather="lock"></i>
                                                <div class="media-content">
                                                    <h3>Only me</h3>
                                                    <small>Only me can see this publication.</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inner-content">
                            <div class="control">
                                <input type="text" class="input is-sm is-fade" placeholder="What is this live about?">
                                <div class="icon">
                                    <i data-feather="activity"></i>
                                </div>
                            </div>
                            <div class="live-stats">
                                <div class="social-count">
                                    <div class="likes-count">
                                        <i data-feather="heart"></i>
                                        <span>0</span>
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
                                <div class="social-count ml-auto">
                                    <div class="views-count">
                                        <i data-feather="eye"></i>
                                        <span>0</span>
                                        <span class="views"><small>views</small></span>
                                    </div>
                                </div>
                            </div>
                            <div class="actions">
                                <div class="action">
                                    <i data-feather="thumbs-up"></i>
                                    <span>Like</span>
                                </div>
                                <div class="action">
                                    <i data-feather="message-circle"></i>
                                    <span>Comment</span>
                                </div>
                                <div class="action">
                                    <i data-feather="link-2"></i>
                                    <span>Share</span>
                                </div>
                                <div class="dropdown is-spaced is-right dropdown-trigger">
                                    <div>
                                        <div class="avatar-button">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                            <i data-feather="triangle"></i>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu has-margin" role="menu">
                                        <div class="dropdown-content">
                                            <a href="#" class="dropdown-item is-selected">
                                                <div class="media">
                                                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                                    <div class="media-content">
                                                        <h3>Jenna Davis</h3>
                                                        <small>Interact as Jenna Davis.</small>
                                                    </div>
                                                    <div class="checkmark">
                                                        <i data-feather="check"></i>
                                                    </div>
                                                </div>
                                            </a>
                                            <hr class="dropdown-divider">
                                            <a href="#" class="dropdown-item">
                                                <div class="media">
                                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/avatars/hanzo.svg" alt="">
                                                    <div class="media-content">
                                                        <h3>Css Ninja</h3>
                                                        <small>Interact as Css Ninja.</small>
                                                    </div>
                                                    <div class="checkmark">
                                                        <i data-feather="check"></i>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tabs-wrapper">
                            <div class="tabs is-fullwidth">
                                <ul>
                                    <li class="is-active">
                                        <a>Comments</a>
                                    </li>
                                    <li>
                                        <a>Upcoming</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content has-slimscroll">
                                <div class="media is-comment">
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/dan.jpg" alt="" data-user-popover="1">
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="username">Dan Walker</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                            eros.</p>
                                        <div class="comment-actions">
                                            <a href="javascript:void(0);" class="is-inverted">Like</a>
                                            <span>3h</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="media is-comment">
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/david.jpg" alt="" data-user-popover="4">
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="username">David Kim</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
                                        <div class="comment-actions">
                                            <a href="javascript:void(0);" class="is-inverted">Like</a>
                                            <span>4h</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="media is-comment">
                                    <figure class="media-left">
                                        <p class="image is-32x32">
                                            <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/rolf.jpg" alt="" data-user-popover="17">
                                        </p>
                                    </figure>
                                    <div class="media-content">
                                        <div class="username">Rolf Krupp</div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna
                                            eros. Consectetur adipiscing elit. Proin ornare magna eros.</p>
                                        <div class="comment-actions">
                                            <a href="javascript:void(0);" class="is-inverted">Like</a>
                                            <span>4h</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="comment-controls">
                            <div class="controls-inner">
                                <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                                <div class="control">
                                    <textarea class="textarea comment-textarea is-rounded" rows="1"></textarea>
                                    <button class="emoji-button">
                                        <i data-feather="smile"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>

    </div>
</div>