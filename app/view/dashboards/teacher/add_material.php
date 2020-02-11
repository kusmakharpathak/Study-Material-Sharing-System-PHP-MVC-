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

            <form class="new-added-form" action="<?php echo URLROOT; ?>/teachers/add_material" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12 form-group">
                        <label for="title">Title *</label>
                        <input type="text" name="title" id="title" placeholder="Title" class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
                    </div>

                    <div class="col-12 form-group">
                        <label for="description">Description *</label>
                        <textarea name="description" id="description" placeholder="Description" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : ''; ?>" style="height: 150px; resize: none"></textarea>
                        <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Subject *</label>
                        <select name="subject" class="select2 form-control  <?php echo (!empty($data['subject_err'])) ? 'is-invalid' : ''; ?>">
                            <option value="">Please Select subject</option>
                            <?php foreach ($data['sub'] as $a): ?>
                            <option value="<?php echo $a->subject?>"><?php echo $a->subject?></option>
                            <?php endforeach; ?>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['subject_err']; ?></span>
                    </div>

                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Semester *</label>
                        <select name="semester" class="select2 form-control  <?php echo (!empty($data['semester_err'])) ? 'is-invalid' : ''; ?>">
                            <option value="">Please Select subject</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['semester_err']; ?></span>
                    </div>

                    <div class="col-12 form-group">
                        <label for="file">Upload file *</label>
                        <div class="custom-file mb-3">
                            <input type="file" name="file" class="custom-file-input form-control <?php echo (!empty($data['file_err'])) ? 'is-invalid' : ''; ?>" id="customFile" name="filename">
                            <label class="custom-file-label form-control" for="customFile ">Choose file</label>
                            <span class="invalid-feedback"><?php echo $data['file_err']; ?></span>
                        </div>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <input type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" value="Add Material">
                        <input type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow" value="Reset">
                    </div>
                </div>
            </form>
        </div>
    </div>

<?php require_once APPROOT.'/view/include/footer.php'?>