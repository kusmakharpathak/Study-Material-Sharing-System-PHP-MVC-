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
            <form class="new-added-form" action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/first" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>First</label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/second" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>Second</label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/third" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>Third</label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/fourth" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>Fourth</label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/fifth" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>Fifth</label>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <a href="<?php echo URLROOT;?>/dashboards/six" class="fa fa-folder" style="font-size: 150px"></a>
                        <label>Six</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require_once APPROOT.'/view/include/footer.php'?>