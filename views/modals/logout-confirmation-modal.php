<div id="logout-confirmation-modal" class="modal is-xsmall has-light-bg">
    <div class="modal-background"></div>
    <div class="modal-content">

        <div class="card">
            <div class="card-heading">
                <h3>Logout Confirmation</h3>

                <!-- Close X button -->
                <div class="close-wrap">
                    <span class="close-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="card-body">
                <p>Are you sure you want to log out of worshipmate?</p>
            </div>
            <div class="card-footer">
                <div class="button-wrap mt-3">
                    <a class="button is-solid accent-button raised" href="../logout">Log Out</a>
                    <button type="button" class="button is-solid dark-grey-button close-modal">Cancel</button>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    // CODE TO CLOSE MODAL
    $("#logout-confirmation-modal .close-modal").on("click", function (){
        $(this).parent().parent().parent().parent().parent().removeClass("is-active");
    });

    function showLogoutModal(){
        $("#logout-confirmation-modal").addClass("is-active");
    }
</script>