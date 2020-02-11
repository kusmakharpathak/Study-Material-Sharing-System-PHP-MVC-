<?php require_once APPROOT . '/view/include/header.php' ?>
<?php require_once APPROOT . '/view/include/topNav.php' ?>
<?php require_once APPROOT . '/view/include/sideNav.php' ?>
<div class="card height-auto">
    <div class="card-body">
        <div class="heading-layout1">
            <div class="item-title">
                <h3>About Me</h3>
            </div>
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button"
                   data-toggle="dropdown" aria-expanded="false">...</a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                </div>
            </div>
        </div>
        <div class="single-info-details">
            <div class="item-img">
                <img src="<?php echo URLROOT;?>/public/img/figure/student1.jpg" alt="student">
            </div>
            <div class="item-content">
                <div class="header-inline item-header">
                    <h3 class="text-dark-medium font-medium"><?php echo $data['users']->f_name.' '.$data['users']->l_name?></h3>
                    <div class="header-elements">
                        <ul>
                            <li><a href="#"><i class="far fa-edit"></i></a></li>
                            <li><a href="#"><i class="fas fa-print"></i></a></li>
                            <li><a href="#"><i class="fas fa-download"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="info-table table-responsive">
                    <table class="table text-nowrap">
                        <tbody>
                        <tr>
                            <td>Name:</td>
                            <td class="font-medium text-dark-medium"><?php echo $data['users']->f_name.' '.$data['users']->l_name?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td class="font-medium text-dark-medium"><?php echo $data['users']->gender?></td>
                        </tr>
<!--                        <tr>-->
<!--                            <td>Date Of Birth:</td>-->
<!--                            <td class="font-medium text-dark-medium">--><?php //echo $data['users']->date_of_birth?><!--</td>-->
<!--                        </tr>-->
                        <tr>
                            <td>Role:</td>
                            <td class="font-medium text-dark-medium"><?php echo $data['admin']->user_type?></td>
                        </tr>
                        <tr>
                            <td>E-mail:</td>
                            <td class="font-medium text-dark-medium"><?php echo $data['admin']->email?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/view/include/footer.php' ?>




<!---->
<?php //foreach($data['mat'] as $sub): ?>
<!--    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">-->
<!--        <label>--><?php //echo $sub->file; ?><!--</label>-->
<!--    </div>-->
<?php //endforeach; ?>
