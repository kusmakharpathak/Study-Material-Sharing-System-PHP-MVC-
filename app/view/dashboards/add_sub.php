<?php require_once APPROOT.'/view/include/header.php'?>
<?php require_once APPROOT.'/view/include/topNav.php'?>
<?php require_once APPROOT.'/view/include/sideNav.php'?>


    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <?php flash('register_success'); ?>
                    <h3>Add User</h3>
                </div>
            </div>
            <form class="new-added-form" action="<?php echo URLROOT; ?>/users/add_sub" method="post">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control <?php echo (!empty($data['subject_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['subject_err']; ?></span>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Add Subject">
                        <input type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </div>




<?php require_once APPROOT.'/view/include/footer.php'?>