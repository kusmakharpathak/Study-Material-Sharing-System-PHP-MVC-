<?php require_once APPROOT . '/view/include/header.php' ?>
<?php require_once APPROOT . '/view/include/topNav.php' ?>
<?php require_once APPROOT . '/view/include/sideNav.php' ?>


<div class="card height-auto">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table display ">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Date</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($data['mat'] as $sub): ?>
                <tr>
                        <td><?php echo $sub->title; ?></td>
                        <td><?php echo $sub->description; ?></td>
                        <td><?php echo $sub->p_date; ?></td>
                        <td><button value="<?php echo $sub->file; ?>">Download</button></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once APPROOT.'/view/include/footer.php'?>