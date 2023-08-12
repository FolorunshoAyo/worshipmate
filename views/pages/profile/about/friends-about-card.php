<div class="about-card">
    <!-- Header -->
    <div class="header">
        <div class="icon-title">
            <i class="mdi mdi-account-group"></i>
            <h3>Friends</h3>
        </div>
        <div class="actions">
            <div class="button-wrapper">
                <a class="button">Invitations</a>
                <div class="indicator">
                    <span>8</span>
                </div>
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
                                <i data-feather="smile"></i>
                                <div class="media-content">
                                    <h3>Manage</h3>
                                    <small>Manage your friend list.</small>
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="media">
                                <i data-feather="search"></i>
                                <div class="media-content">
                                    <h3>Find friends</h3>
                                    <small>Search for new friends.</small>
                                </div>
                            </div>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <i data-feather="eye"></i>
                                <div class="media-content">
                                    <h3>View all</h3>
                                    <small>View all friends.</small>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="columns friends-columns is-multiline">
            <!-- Friend -->
            <?php
            include("../views/pages/profile/about/friend-small-card.php");
            ?>
            <!-- Friend -->
            <div class="column is-6">
                <div class="friend-small-card">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/mike.jpg" data-user-popover="12" alt="">
                    <div class="meta">
                        <span>Mike Lasalle</span>
                        <span>91 Friends</span>
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
                                            <h3>View Profile</h3>
                                            <small>Open this user profile.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Message</h3>
                                            <small>Send a message to this user.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="delete"></i>
                                        <div class="media-content">
                                            <h3>Unfriend</h3>
                                            <small>Remove from friend list.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Friend -->
            <div class="column is-6">
                <div class="friend-small-card">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/stella.jpg" data-user-popover="2" alt="">
                    <div class="meta">
                        <span>Stella Bergmann</span>
                        <span>547 Friends</span>
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
                                            <h3>View Profile</h3>
                                            <small>Open this user profile.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Message</h3>
                                            <small>Send a message to this user.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="delete"></i>
                                        <div class="media-content">
                                            <h3>Unfriend</h3>
                                            <small>Remove from friend list.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Friend -->
            <div class="column is-6">
                <div class="friend-small-card">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/david.jpg" data-user-popover="4" alt="">
                    <div class="meta">
                        <span>David Kim</span>
                        <span>264 Friends</span>
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
                                            <h3>View Profile</h3>
                                            <small>Open this user profile.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Message</h3>
                                            <small>Send a message to this user.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="delete"></i>
                                        <div class="media-content">
                                            <h3>Unfriend</h3>
                                            <small>Remove from friend list.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Friend -->
            <div class="column is-6">
                <div class="friend-small-card">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/elise.jpg" data-user-popover="6" alt="">
                    <div class="meta">
                        <span>Elise Walker</span>
                        <span>321 Friends</span>
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
                                            <h3>View Profile</h3>
                                            <small>Open this user profile.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Message</h3>
                                            <small>Send a message to this user.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="delete"></i>
                                        <div class="media-content">
                                            <h3>Unfriend</h3>
                                            <small>Remove from friend list.</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Friend -->
            <div class="column is-6">
                <div class="friend-small-card">
                    <img src="https://via.placeholder.com/150x150" data-demo-src="../assets/img/avatars/milly.jpg" data-user-popover="7" alt="">
                    <div class="meta">
                        <span>Milly Augustine</span>
                        <span>264 Friends</span>
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
                                            <h3>View Profile</h3>
                                            <small>Open this user profile.</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="message-square"></i>
                                        <div class="media-content">
                                            <h3>Message</h3>
                                            <small>Send a message to this user.</small>
                                        </div>
                                    </div>
                                </a>
                                <hr class="dropdown-divider">
                                <a href="#" class="dropdown-item">
                                    <div class="media">
                                        <i data-feather="delete"></i>
                                        <div class="media-content">
                                            <h3>Unfriend</h3>
                                            <small>Remove from friend list.</small>
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
</div>