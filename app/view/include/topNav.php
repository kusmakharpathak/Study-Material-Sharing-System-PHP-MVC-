<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    <div class="navbar navbar-expand-md header-menu-one bg-light">
        <div class="nav-bar-header-one">
            <div class="header-logo">
                <a href="<?php echo URLROOT; ?>/dashboards">
                    <img src="<?php echo URLROOT;?>/public/img/sunway.png" style="width: 150px" alt="logo">
                </a>
            </div>
            <div class="toggle-button sidebar-toggle">
                <button type="button" class="item-link">
                        <span class="btn-icon-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                        </span>
                </button>
            </div>
        </div>
        <div class="d-md-none mobile-nav-bar">
            <button class="navbar-toggler pulse-animation" type="button" data-toggle="collapse" data-target="#mobile-navbar" aria-expanded="false">
                <i class="far fa-arrow-alt-circle-down"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-toggle-mobile">
                <i class="fas fa-bars"></i>
            </button>
        </div>
        <div class="header-main-menu collapse navbar-collapse" id="mobile-navbar">
            <ul class="navbar-nav">

            </ul>
            <ul class="navbar-nav">
                <li class="navbar-item dropdown header-admin">
                    <a class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-expanded="false">
                        <div class="admin-title">
<!--                            <h5 class="item-title">--><?php //echo $data['admin']->user_name?><!--</h5>-->
<!--                            <span>--><?php //echo $data['admin']->user_type?><!--</span>-->
                        </div>
                        <div class="admin-img">
                            <img src="<?php echo URLROOT;?>/public/img/figure/admin.jpg" alt="Admin">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="item-header">
                            <h6 class="item-title"><?php echo $data['admin']->user_name?></h6>
                        </div>
                        <div class="item-content">
                            <ul class="settings-list">
                                <li><a href="<?php echo URLROOT;?>/dashboards/profile"><i class="flaticon-user"></i>My Profile</a></li>
                                <li><a href="<?php echo URLROOT;?>/users/logout"><i class="flaticon-turn-off"></i>Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <div class="header-language navbar-nav-link">
                    <i class="fas fa-globe-americas"></i>EN
                </div>
            </ul>
        </div>
    </div>
    <!-- Header Menu Area End Here -->