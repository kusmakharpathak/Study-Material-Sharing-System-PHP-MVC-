<?php require_once APPROOT.'/view/include/header.php'?>
<?php require_once APPROOT.'/view/include/topNav.php'?>
<?php if($data['admin']->status == 'y'): ?>
    <?php require_once APPROOT.'/view/include/sideNav.php'?>
<?php endif; ?>

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Teacher</h3>
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
            <form class="new-added-form" action="<?php echo URLROOT; ?>/users/user_details" method="post">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" name="f_name" placeholder="First Name" class="form-control <?php echo (!empty($data['f_name_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['f_name_err']; ?></span>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" name="l_name" placeholder="Last Name" class="form-control <?php echo (!empty($data['l_name_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['l_name_err']; ?></span>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select name="gender" class="select2 form-control <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : ''; ?>">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="text" name="date_of_birth" placeholder="dd/mm/yyyy" class="form-control air-datepicker <?php echo (!empty($data['date_of_birth_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['date_of_birth_err']; ?></span>
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Contact No</label>
                        <input type="text" name="contact_no" placeholder="Contact No" class="form-control <?php echo (!empty($data['contact_no_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['contact_no_err']; ?></span>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Father's Name</label>
                        <input type="text" name="father_name" placeholder="Father's Name" class="form-control <?php echo (!empty($data['father_name_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['father_name_err']; ?></span>
                    </div>

                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Mother's Name</label>
                        <input type="text" name="mother_name" placeholder="Mother's Name" class="form-control <?php echo (!empty($data['mother_name_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['mother_name_err']; ?></span>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address" class="form-control <?php echo (!empty($data['address_err'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                    </div>
                    <div class="col-lg-6 col-12 form-group">
                        <label>Short BIO</label>
                        <textarea class="textarea form-control <?php echo (!empty($data['about_err'])) ? 'is-invalid' : ''; ?>" name="about" id="form-message" cols="10" rows="9" style="resize: none">Short BIO</textarea>
                        <span class="invalid-feedback"><?php echo $data['about_err']; ?></span>
                    </div>
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label for="file">Profile Picture *</label>
                        <div class="custom-file mb-3">
                            <input type="file" name="image" class="custom-file-input form-control <?php echo (!empty($data['file_err'])) ? 'is-invalid' : ''; ?>" id="customFile" name="filename">
                            <label class="custom-file-label form-control" for="customFile ">Choose file</label>
                            <span class="invalid-feedback"><?php echo $data['file_err']; ?></span>
                        </div>
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