<?php require_once APPROOT.'/view/include/header.php'?>
    <div id="preloader"></div>
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="<?php echo URLROOT?>/public/img/sunway.png" style="width: 300px" alt="logo">
                </div>
                <form action="<?php echo URLROOT; ?>/users/register" class="login-form" method="POST">
                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" name="user_name" id="user_name" placeholder="Enter User Name" class="form-control <?php echo (!empty($data['user_name_err'])) ? 'is-invalid' : ''; ?>">
                        <i class="far fa-envelope"></i>
                        <span class="invalid-feedback"><?php echo $data['user_name_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                        <i class="far fa-envelope"></i>
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                        <i class="fas fa-lock"></i>
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password">Confirm Password *</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Enter confirm password" class="form-control <?php echo (!empty($data['confirm_pass_err'])) ? 'is-invalid' : ''; ?>">
                        <i class="fas fa-lock"></i>
                        <span class="invalid-feedback"><?php echo $data['confirm_pass_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Gender *</label>
                        <select class="select2 form-control <?php echo (!empty($data['user_type_err'])) ? 'is-invalid' : ''; ?>" name="user_type">
                            <i class="fa fa-lock"></i>
                            <option value="">Please Select Gender *</option>
                            <option value="admin">Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="student">Student</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['user_type_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="login-btn" value="Register">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT.'/view/include/footer.php'?>