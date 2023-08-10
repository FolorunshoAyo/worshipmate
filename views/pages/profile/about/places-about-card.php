<div class="about-card">
    <!-- Header -->
    <div class="header">
        <div class="icon-title">
            <i class="mdi mdi-map-outline"></i>
            <h3>Places</h3>
        </div>
        <div class="actions">
            <div class="button-wrapper">
                <a class="button">View All</a>
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
                                <i data-feather="clock"></i>
                                <div class="media-content">
                                    <h3>Recent</h3>
                                    <small>Show recent places.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="map-pin"></i>
                                <div class="media-content">
                                    <h3>Visited</h3>
                                    <small>Show visited places.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="plus"></i>
                                <div class="media-content">
                                    <h3>Add</h3>
                                    <small>Add a new place.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body has-flex-list">
        <!-- Places -->
        <div class="place-list">
            <!-- Place item -->
            <?php
            include($base_url . "views/pages/profile/about/place-item.php");
            ?>
            <!-- Place item -->
            <div class="place-wrapper">
                <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/unsplash/places/17.jpg" alt="">
                <div class="foot">
                    <a href="#" class="place-name">Dany's Burgers</a>
                    <div class="rating">
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i data-feather="star"></i>
                    </div>
                </div>
            </div>
            <!-- Place item -->
            <div class="place-wrapper">
                <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/unsplash/places/18.jpg" alt="">
                <div class="foot">
                    <a href="#" class="place-name">Vethnics Fashion</a>
                    <div class="rating">
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                    </div>
                </div>
            </div>
            <!-- Place item -->
            <div class="place-wrapper">
                <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/unsplash/places/19.jpg" alt="">
                <div class="foot">
                    <a href="#" class="place-name">The Smoothie Bar</a>
                    <div class="rating">
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                    </div>
                </div>
            </div>
            <!-- Place item -->
            <div class="place-wrapper">
                <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/unsplash/places/20.jpg" alt="">
                <div class="foot">
                    <a href="#" class="place-name">Eiffel Tower</a>
                    <div class="rating">
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                    </div>
                </div>
            </div>
            <!-- Place item -->
            <div class="place-wrapper">
                <img src="https://via.placeholder.com/800x600" data-demo-src="assets/img/demo/unsplash/places/21.jpg" alt="">
                <div class="foot">
                    <a href="#" class="place-name">Lennie's Fair</a>
                    <div class="rating">
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                        <i class="is-checked" data-feather="star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>