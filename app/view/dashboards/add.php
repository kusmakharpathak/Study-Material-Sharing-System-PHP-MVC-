<?php require_once APPROOT.'/view/include/header.php'?>
<?php require_once APPROOT.'/view/include/topNav.php'?>

<?php if($data['admin']->status == 'y'): ?>
    <?php require_once APPROOT.'/view/include/sideNav.php'?>
<?php endif; ?>

<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <?php flash('register_success'); ?>
                <h3>Add User</h3>
            </div>
        </div>
        <form class="new-added-form" action="<?php echo URLROOT; ?>/users/register" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label for="username">Username *</label>
                    <input type="text" name="user_name" id="username" placeholder="Username" class="form-control <?php echo (!empty($data['user_name_err'])) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $data['user_name_err']; ?></span>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" id="email" placeholder="Email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label for="password">Password *</label>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label for="c_password">Confirm Password *</label>
                    <input type="password" name="confirm_password" id="c_password" placeholder="Password" class="form-control <?php echo (!empty($data['confirm_pass_err'])) ? 'is-invalid' : ''; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_pass_err']; ?></span>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 form-group">
                    <label>Role *</label>
                    <select name="user_type" class="select2 form-control  <?php echo (!empty($data['user_type_err'])) ? 'is-invalid' : ''; ?>">
                        <option value="">Please Select Gender *</option>
                        <option value="admin">Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="student">Student</option>
                    </select>
                    <span class="invalid-feedback"><?php echo $data['user_type_err']; ?></span>
                </div>
                <div class="col-12 form-group mg-t-8">
                    <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Add User">
                    <input type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="Reset">
                </div>
            </div>
        </form>
    </div>
</div>

<?php require_once APPROOT.'/view/include/footer.php'?>