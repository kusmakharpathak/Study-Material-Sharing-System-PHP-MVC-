<div class="dashboard-page-one">
    <!-- Sidebar Area Start Here -->
    <div class="sidebar-main sidebar-menu-one sidebar-expand-md sidebar-color">
        <div class="mobile-sidebar-header d-md-none">
            <div class="header-logo">
                <a href="<?php echo URLROOT; ?>/dashboards">
                    <img src="<?php echo URLROOT;?>/public/img/sunway.png" style="width: 150px" alt="logo">
                </a>
            </div>
        </div>
        <div class="sidebar-menu-content">
            <ul class="nav nav-sidebar-menu sidebar-toggle-view">
<!--                --><?php //echo id()?>
                <?php if($data['admin']->user_type == 'admin'): ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-user"></i><span>Admin</span></a>
                    <ul class="nav sub-group-menu">
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/dashboards/profile" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/dashboards/add" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Users</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/dashboards/add_sub" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Subject</a>
                        </li>
                    </ul>
                </li>
                <?php endif; ?>
                <?php if($data['admin']->user_type == 'admin' or  $data['admin']->user_type == 'teacher') : ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i
                            class="flaticon-multiple-users-silhouette"></i><span>Teachers</span></a>
                    <ul class="nav sub-group-menu">
                        <?php if($data['admin']->user_type == 'teacher'): ?>
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/dashboards/profile" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Profile</a>
                        </li>
                        <?php endif; ?>
                        <?php if($data['admin']->user_type == 'teacher'): ?>
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/teachers/add_material" class="nav-link"><i class="fas fa-angle-right"></i>Add
                                Material</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <?php endif; ?>
                <li class="nav-item sidebar-nav-item">
                    <a href="#" class="nav-link"><i class="flaticon-classmates"></i><span>Students</span></a>
                    <ul class="nav sub-group-menu">
                        <?php if($data['admin']->user_type == 'student') : ?>
                        <li class="nav-item">
                            <a href="<?php echo URLROOT;?>/dashboards/profile" class="nav-link"><i
                                    class="fas fa-angle-right"></i>Profile</a>
                        </li>
                            <li class="nav-item">
                                <a href="<?php echo URLROOT;?>/dashboards/semester" class="nav-link"><i
                                        class="fas fa-angle-right"></i>Material</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="dashboard-content-one">
        <!-- Breadcubs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3><?php echo $data['admin']->user_type ?></h3>
            <ul>
                <li>
                    <a href="<?php echo URLROOT; ?>/dashboards">Home</a>
                </li>
                <li><?php echo $data['admin']->user_type ?></li>
            </ul>
        </div>