<div class="about-card">
    <!-- Header -->
    <div class="header">
        <div class="icon-title">
            <i class="mdi mdi-camera"></i>
            <h3>Photos</h3>
        </div>
        <div class="actions">
            <div class="button-wrapper">
                <a class="button">Albums</a>
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
                                <i data-feather="user"></i>
                                <div class="media-content">
                                    <h3>Of Me</h3>
                                    <small>View pictures of me.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="users"></i>
                                <div class="media-content">
                                    <h3>With Me</h3>
                                    <small>View pictures with me.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="upload-cloud"></i>
                                <div class="media-content">
                                    <h3>Upload</h3>
                                    <small>Upload pictures from computer.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="plus"></i>
                                <div class="media-content">
                                    <h3>Create Album</h3>
                                    <small>Create a new album.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="image"></i>
                                <div class="media-content">
                                    <h3>View all</h3>
                                    <small>View all photos.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body has-flex-list">
        <!-- Photos -->
        <div class="photo-list">
            <!-- Photo item -->
            <?php
            include($base_url . "views/pages/profile/about/photo-item.php");
            ?>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/2.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/3.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/4.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/5.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/6.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/7.jpg" alt="">
            </div>
            <!-- Photo item -->
            <div class="photo-wrapper">
                <div class="photo-overlay"></div>
                <div class="small-like">
                    <div class="inner">
                        <div class="like-overlay"></div>
                        <i data-feather="heart"></i>
                    </div>
                </div>
                <img src="https://via.placeholder.com/400x400" data-demo-src="assets/img/demo/profile/about/photos/8.jpg" alt="">
            </div>
        </div>
    </div>
</div>