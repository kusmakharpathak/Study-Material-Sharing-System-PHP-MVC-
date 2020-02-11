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
        <form class="new-added-form" action="<?php echo URLROOT; ?>/dashboards/material" method="post">
            <div class="row">
                <?php foreach($data['sub'] as $sub): ?>
                    <div class="col-xl-6 col-lg-6 col-12 form-group mg-t-8">
                        <button class="fa fa-folder" style="font-size: 100px" name="subject" value="<?php echo $sub->subject; ?>"></button>
                        <label><?php echo $sub->subject; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
</div>
<?php require_once APPROOT.'/view/include/footer.php'?>