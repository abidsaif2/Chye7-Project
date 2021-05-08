<?php include('matchig.php'); ?>

</div>
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog profile-modal">
        <div class="modal-content profile-content">
            <div class="modal-header profile-img">
                <?php if (!empty($userimg)) {
                    echo "<div style='background-image:url(../images/" . $userimg . "'); ><button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'>
                    </button></div>";
                } else { ?>
                    <div style='background-image:url(../assets/user.svg)' ;><button type=' button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'>
                        </button></div>
                <?php } ?>
            </div>
            <div class="modal-body profile-body">
                <div class="modal-body-head">
                    <div class="modal-body-name">
                        <div class="profile-name">
                            <div class="name-age1 ">
                                <div>
                                    <?php echo strtoupper($username) . ', '; ?>
                                </div>
                                <div>

                                    <?php echo $usreage; ?>'
                                </div>
                            </div>
                        </div>
                        <div class="profile-headline">
                            <?php if (!empty($userheadline)) {
                                echo $userheadline;
                            } else {
                                echo "...";
                            } ?>
                        </div>
                    </div>
                    <div class="modal-body-icon">
                        <img src="">
                    </div>
                </div>
                <div class="modal-body-about">

                    <h5>About:</h5>
                    <p><?php if (!empty($userabout)) { ?>

                            <?php echo $userabout;  ?>

                        <?php } else {
                            echo "...";
                        } ?></p>


                </div>
                <div class="modal-body-intrests">
                    <h5>Interest:</h5>
                    <div class="interests">
                        <?php if (!empty($userinterest)) {
                            $interests = explode(',', $userinterest);
                            foreach ($interests as $interest) { ?>
                                <div class="interst"><?php echo $interest; ?></div>
                            <?php }
                        } else { ?>
                            <p>...</p>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>