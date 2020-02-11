<?php require_once APPROOT.'/view/include/header.php'?>
    <div id="preloader"></div>
    <div class="login-page-wrap">
        <div class="login-page-content">
            <div class="login-box">
                <div class="item-logo">
                    <img src="<?php echo URLROOT?>/public/img/sunway.png" style="width: 300px" alt="logo">
                </div>
                <form action="<?php echo URLROOT; ?>/users/login" class="login-form" method="POST">
                    <? echo $_SESSION['user_id']?>
                    <div class="form-group">
                        <label for="email">Email/Username</label>
                        <input type="text" name="email" id="email" placeholder="Enter Email/Username" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>">
                        <i class="far fa-envelope"></i>
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                        <i class=""></i>
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>

                    <div class="form-group d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember-me">
                            <label for="remember-me" class="form-check-label">Remember Me</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="login-btn" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php require_once APPROOT.'/view/include/footer.php'?>