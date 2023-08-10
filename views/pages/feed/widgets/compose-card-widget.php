<div id="compose-card" class="card is-new-content">
    <!-- Top tabs -->
    <div class="tabs-wrapper">
        <div class="tabs is-boxed is-fullwidth">
            <ul>
                <li class="is-active">
                    <a>
                        <span class="icon is-small"><i data-feather="edit-3"></i></span>
                        <span>Publish</span>
                    </a>
                </li>
                <li>
                    <a class="modal-trigger" data-modal="albums-help-modal">
                        <span class="icon is-small"><i data-feather="image"></i></span>
                        <span>Albums</span>
                    </a>
                </li>
                <!-- <li>
                                            <a class="modal-trigger" data-modal="videos-help-modal">
                                                <span class="icon is-small"><i data-feather="video"></i></span>
                                                <span>Video</span>
                                            </a>
                                        </li> -->
                <!-- Close X button -->
                <li class="close-wrap">
                    <span class="close-publish">
                        <i data-feather="x"></i>
                    </span>
                </li>
            </ul>
        </div>

        <!-- Tab content -->
        <div class="tab-content">
            <!-- Compose form -->
            <div class="compose">
                <div class="compose-form">
                    <img src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/jenna.png" alt="">
                    <div class="control">
                        <textarea id="publish" class="textarea" rows="3" placeholder="Write something about you..."></textarea>
                    </div>
                </div>

                <div id="feed-upload" class="feed-upload">

                </div>

                <div id="options-summary" class="options-summary"></div>

                <div id="tag-suboption" class="is-autocomplete is-suboption is-hidden">
                    <!-- Tag friends suboption -->
                    <div id="tag-list" class="tag-list"></div>
                    <div class="control">
                        <input id="users-autocpl" type="text" class="input" placeholder="Who are you with?">
                        <div class="icon">
                            <i data-feather="search"></i>
                        </div>
                        <div class="close-icon is-main">
                            <i data-feather="x"></i>
                        </div>
                    </div>
                </div>
                <!-- /Tag friends suboption -->

                <!-- Activities suboption -->
                <div id="activities-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="activities-autocpl-wrapper" class="control has-margin">
                        <input id="activities-autocpl" type="text" class="input" placeholder="What are you doing right now?">
                        <div class="icon">
                            <i data-feather="search"></i>
                        </div>
                        <div class="close-icon is-main">
                            <i data-feather="x"></i>
                        </div>
                    </div>

                    <!-- Mood suboption -->
                    <div id="mood-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="mood-autocpl" type="text" class="input is-subactivity" placeholder="How do you feel?">
                            <div class="input-block">
                                Feels
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Drinking suboption child -->
                    <div id="drinking-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="drinking-autocpl" type="text" class="input is-subactivity" placeholder="What are you drinking?">
                            <div class="input-block">
                                Drinks
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Eating suboption child -->
                    <div id="eating-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="eating-autocpl" type="text" class="input is-subactivity" placeholder="What are you eating?">
                            <div class="input-block">
                                Eats
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Reading suboption child -->
                    <div id="reading-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="reading-autocpl" type="text" class="input is-subactivity" placeholder="What are you reading?">
                            <div class="input-block">
                                Reads
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Watching suboption child -->
                    <div id="watching-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="watching-autocpl" type="text" class="input is-subactivity" placeholder="What are you watching?">
                            <div class="input-block">
                                Watches
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Travel suboption child -->
                    <div id="travel-autocpl-wrapper" class="is-autocomplete is-activity is-hidden">
                        <div class="control has-margin">
                            <input id="travel-autocpl" type="text" class="input is-subactivity" placeholder="Where are you going?">
                            <div class="input-block">
                                Travels
                            </div>
                            <div class="close-icon is-subactivity">
                                <i data-feather="x"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /Activities suboption -->

                <!-- Location suboption -->
                <div id="location-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="location-autocpl-wrapper" class="control is-location-wrapper has-margin">
                        <input id="location-autocpl" type="text" class="input" placeholder="Where are you now?">
                        <div class="icon">
                            <i data-feather="map-pin"></i>
                        </div>
                        <div class="close-icon is-main">
                            <i data-feather="x"></i>
                        </div>
                    </div>
                </div>

                <!-- Link suboption -->
                <div id="link-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="link-autocpl-wrapper" class="control is-location-wrapper has-margin">
                        <input id="link-autocpl" type="text" class="input" placeholder="Enter the link URL">
                        <div class="icon">
                            <i data-feather="link-2"></i>
                        </div>
                        <div class="close-icon is-main">
                            <i data-feather="x"></i>
                        </div>
                    </div>
                    <div class="post-link link-preview-spinner is-hidden">
                        <span class="loader"></span>
                    </div>
                    <div class="post-link is-text is-hidden">
                        <!-- Link content -->
                        <div class="link-content">
                            <h4>
                                <a href="#">What's new in Bootstrap 4 ?</a>
                            </h4>
                            <p>Before I create the new Bootstrap 4 crash course I want to go over some of the changes from Bootstrap
                                3.</p>
                            <small>Youtube.com</small>
                        </div>
                    </div>
                    <div class="post-link is-video is-hidden">
                        <!-- Link image -->
                        <div class="link-image">
                            <img src="../assets/img/demo/video/bootstrap.jpg" data-demo-src="../assets/img/demo/video/bootstrap.jpg" alt="">
                            <div class="video-overlay"></div>
                            <a class="video-button" data-fancybox="" href="https://www.youtube.com/watch?v=N8GksI_-iIM">
                                <img src="../assets/img/icons/video/play.svg" alt="">
                            </a>
                        </div>
                        <!-- Link content -->
                        <div class="link-content">
                            <h4>
                                <a href="#">What's new in Bootstrap 4 ?</a>
                            </h4>
                            <p>Before I create the new Bootstrap 4 crash course I want to go over some of the changes from Bootstrap
                                3.</p>
                            <small>Youtube.com</small>
                        </div>
                    </div>
                </div>

                <!-- GIF suboption -->
                <div id="gif-suboption" class="is-autocomplete is-suboption is-hidden">
                    <div id="gif-autocpl-wrapper" class="control is-gif-wrapper has-margin">
                        <input id="gif-autocpl" type="text" class="input" placeholder="Search a GIF to add" autofocus>
                        <div class="icon">
                            <i data-feather="search"></i>
                        </div>
                        <div class="close-icon is-main">
                            <i data-feather="x"></i>
                        </div>
                        <div class="gif-dropdown">
                            <div class="inner">
                                <div class="gif-block">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/1.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/2.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/3.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/4.gif" alt="">
                                </div>
                                <div class="gif-block">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/5.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/6.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/7.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/8.gif" alt="">
                                </div>
                                <div class="gif-block">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/9.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/10.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/11.gif" alt="">
                                    <img src="https://via.placeholder.com/478x344" data-demo-src="../assets/img/demo/gif/12.gif" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Compose form -->

            <!-- General extended options -->
            <div id="extended-options" class="compose-options is-hidden">
                <div class="columns is-multiline is-full">
                    <!-- Upload action -->
                    <div class="column is-6 is-narrower">
                        <div class="compose-option is-centered">
                            <i data-feather="camera"></i>
                            <span>Photo/Video</span>
                            <input id="feed-upload-input-1" type="file" accept="image/*, video/*" onchange="readURL(this)">
                        </div>
                    </div>
                    <!-- Mood action -->
                    <div class="column is-6 is-narrower">
                        <div id="extended-show-activities" class="compose-option is-centered">
                            <img src="../assets/img/icons/emoji/emoji-1.svg" alt="">
                            <span>Mood/Activity</span>
                        </div>
                    </div>
                    <!-- Tag friends action -->
                    <div class="column is-6 is-narrower">
                        <div id="open-tag-suboption" class="compose-option is-centered">
                            <i data-feather="tag"></i>
                            <span>Tag friends</span>
                        </div>
                    </div>
                    <!-- Post location action -->
                    <div class="column is-6 is-narrower">
                        <div id="open-location-suboption" class="compose-option is-centered">
                            <i data-feather="map-pin"></i>
                            <span>Post location</span>
                        </div>
                    </div>
                    <!-- Share link action -->
                    <div class="column is-6 is-narrower">
                        <div id="open-link-suboption" class="compose-option is-centered">
                            <i data-feather="link-2"></i>
                            <span>Share link</span>
                        </div>
                    </div>
                    <!-- Post GIF action -->
                    <!-- <div class="column is-6 is-narrower">
                                                <div id="open-gif-suboption" class="compose-option is-centered">
                                                    <i data-feather="image"></i>
                                                    <span>Post GIF</span>
                                                </div>
                                            </div> -->
                </div>
            </div>
            <!-- /General extended options -->

            <!-- General basic options -->
            <div id="basic-options" class="compose-options">
                <!-- Upload action -->
                <div class="compose-option">
                    <i data-feather="camera"></i>
                    <span>Media</span>
                    <input id="feed-upload-input-2" type="file" type="file" accept="image/*, video/*" onchange="readURL(this)">
                    <!--accept=".png, .jpg, .jpeg"-->
                </div>
                <!-- Mood action -->
                <div id="show-activities" class="compose-option">
                    <img src="../assets/img/icons/emoji/emoji-1.svg" alt="">
                    <span>Activity</span>
                </div>
                <!-- Expand action -->
                <div id="open-extended-options" class="compose-option">
                    <i data-feather="more-horizontal"></i>
                </div>
            </div>
            <!-- /General basic options -->

            <!-- Hidden Options -->
            <div class="hidden-options">
                <div class="target-channels">
                    <!-- Publication Channel -->
                    <div class="channel">
                        <div class="round-checkbox is-small">
                            <div>
                                <input type="checkbox" id="checkbox-1" checked>
                                <label for="checkbox-1"></label>
                            </div>
                        </div>
                        <div class="channel-icon">
                            <i data-feather="bell"></i>
                        </div>
                        <div class="channel-name">Activity Feed</div>
                        <!-- Dropdown menu -->
                        <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <i class="main-icon" data-feather="smile"></i>
                                    <span>Friends</span>
                                    <i class="caret" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
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
                    <!-- Publication Channel -->
                    <div class="channel">
                        <div class="round-checkbox is-small">
                            <div>
                                <input type="checkbox" id="checkbox-2">
                                <label for="checkbox-2"></label>
                            </div>
                        </div>
                        <div class="story-icon">
                            <div class="plus-icon">
                                <i data-feather="plus"></i>
                            </div>
                        </div>

                        <div class="channel-name">My Story</div>
                        <!-- Dropdown menu -->
                        <div class="dropdown is-spaced is-modern is-right is-neutral dropdown-trigger">
                            <div>
                                <button class="button" aria-haspopup="true">
                                    <i class="main-icon" data-feather="smile"></i>
                                    <span>Friends</span>
                                    <i class="caret" data-feather="chevron-down"></i>
                                </button>
                            </div>
                            <div class="dropdown-menu" role="menu">
                                <div class="dropdown-content">
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
                                            <i data-feather="users"></i>
                                            <div class="media-content">
                                                <h3>Friends and contacts</h3>
                                                <small>Your friends and contacts.</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Friends list -->
                <div class="friends-list is-hidden">
                    <!-- Header -->
                    <div class="list-header">
                        <span>Send in a message</span>
                        <div class="actions">
                            <a id="open-compose-search" href="javascript:void(0);" class="search-trigger">
                                <i data-feather="search"></i>
                            </a>
                            <!-- Hidden filter input -->
                            <div id="compose-search" class="control is-hidden">
                                <input type="text" class="input" placeholder="Search People">
                                <span>
                                    <i data-feather="search"></i>
                                </span>
                            </div>
                            <a href="javascript:void(0);" class="is-inverted modal-trigger" data-modal="create-group-modal">Create group</a>
                        </div>
                    </div>
                    <!-- List body -->
                    <div class="list-body">

                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-3">
                                    <label for="checkbox-3"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/dan.jpg" alt="">
                            <div class="friend-name">Dan Walker</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-4">
                                    <label for="checkbox-4"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/daniel.jpg" alt="">
                            <div class="friend-name">Daniel Wellington</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-5">
                                    <label for="checkbox-5"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/stella.jpg" alt="">
                            <div class="friend-name">Stella Bergmann</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-6">
                                    <label for="checkbox-6"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/david.jpg" alt="">
                            <div class="friend-name">David Kim</div>
                        </div>
                        <!-- Friend -->
                        <div class="friend-block">
                            <div class="round-checkbox is-small">
                                <div>
                                    <input type="checkbox" id="checkbox-7">
                                    <label for="checkbox-7"></label>
                                </div>
                            </div>
                            <img class="friend-avatar" src="https://via.placeholder.com/300x300" data-demo-src="../assets/img/avatars/nelly.png" alt="">
                            <div class="friend-name">Nelly Schwartz</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer buttons -->
            <div class="more-wrap">
                <!-- View more button -->
                <button id="show-compose-friends" type="button" class="button is-more" aria-haspopup="true">
                    <i data-feather="more-vertical"></i>
                    <span>View More</span>
                </button>
                <!-- Publish button -->
                <button id="publish-button" type="button" class="button is-solid accent-button is-fullwidth is-disabled">
                    Publish
                </button>
            </div>
        </div>
    </div>
</div>