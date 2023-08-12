<div class="about-card">
    <!-- Header -->
    <div class="header">
        <div class="icon-title">
            <i class="mdi mdi-video"></i>
            <h3>Videos</h3>
        </div>
        <div class="actions">
            <div class="button-wrapper">
                <a class="button">All Videos</a>
            </div>
            <!-- Dropdown -->
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
                                <i data-feather="edit-3"></i>
                                <div class="media-content">
                                    <h3>Manage</h3>
                                    <small>Manage your videos.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="plus"></i>
                                <div class="media-content">
                                    <h3>Upload</h3>
                                    <small>Upload a new video.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="settings"></i>
                                <div class="media-content">
                                    <h3>Settings</h3>
                                    <small>Open video settings.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body has-flex-list">
        <!-- Videos -->
        <div class="video-list">
            <!-- Video item -->
            <?php
            include("../views/pages/profile/about/video-item.php");
            ?>
            <!-- Video item -->
            <div class="video-wrapper">
                <div class="video-overlay"></div>
                <div class="video-length">00:49</div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x600" data-demo-src="../assets/img/demo/profile/about/videos/2.jpg" alt="">
                <div class="video-button">
                    <img src="../assets/img/icons/video/play.svg" alt="">
                </div>
            </div>
            <!-- Video item -->
            <div class="video-wrapper">
                <div class="video-overlay"></div>
                <div class="video-length">01:27</div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x600" data-demo-src="../assets/img/demo/profile/about/videos/3.jpg" alt="">
                <div class="video-button">
                    <img src="../assets/img/icons/video/play.svg" alt="">
                </div>
            </div>
            <!-- Video item -->
            <div class="video-wrapper">
                <div class="video-overlay"></div>
                <div class="video-length">12:32</div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x600" data-demo-src="../assets/img/demo/profile/about/videos/4.jpg" alt="">
                <div class="video-button">
                    <img src="../assets/img/icons/video/play.svg" alt="">
                </div>
            </div>
            <!-- Video item -->
            <div class="video-wrapper">
                <div class="video-overlay"></div>
                <div class="video-length">03:41</div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x600" data-demo-src="../assets/img/demo/profile/about/videos/5.jpg" alt="">
                <div class="video-button">
                    <img src="../assets/img/icons/video/play.svg" alt="">
                </div>
            </div>
            <!-- Video item -->
            <div class="video-wrapper">
                <div class="video-overlay"></div>
                <div class="video-length">01:13</div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/800x600" data-demo-src="../assets/img/demo/profile/about/videos/6.jpg" alt="">
                <div class="video-button">
                    <img src="../assets/img/icons/video/play.svg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>