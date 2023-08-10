<div id="upload-crop-cover-modal" class="modal upload-crop-cover-modal is-large has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">

        <div class="card">
            <div class="card-heading">
                <h3>Upload Cover</h3>
                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                        <i data-feather="x"></i>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <label class="cover-uploader-box" for="upload-cover-picture">
                    <span class="inner-content">
                        <img src="../assets/img/illustrations/profile/add-cover.svg" alt="">
                        <span>Click here to <br>upload a cover image</span>
                    </span>
                    <input type="file" id="upload-cover-picture" accept="image/*">
                </label>
                <div class="upload-demo-wrap is-hidden">
                    <div id="upload-cover"></div>
                    <div class="upload-help">
                        <a id="cover-upload-reset" class="cover-reset is-hidden">Reset Picture</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button id="submit-cover-picture" class="button is-solid accent-button is-fullwidth raised is-disabled">Use
                    Picture</button>
            </div>
        </div>

    </div>
</div>