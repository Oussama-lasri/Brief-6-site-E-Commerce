<?php include APPROOT.'/views/inc/header.php'; ?>
<div class="row" style="padding-top:120px ;">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-3 m-5">
            <h2>create An account</h2>
            <p>please fill out this form to register with us</p>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="form-group">
                    <!-- name -->
                    <label for="name" >Name : <sup>*</sup></label>
                    <input type="text" name="name" class="form-control form-control-lg <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['name']; ?>">
                    <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
                    <!-- Phone Number -->
                    <label for="Phone_Number" class="mt-3">Phone Number : <sup>*</sup></label>
                    <input type="number" name="Phone_Number" class="form-control form-control-lg <?php echo (!empty($data['Phone_Number_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Phone_Number']; ?>">
                    <span class="invalid-feedback"><?php echo $data['Phone_Number_err']; ?></span>
                    <!-- Adresse client -->
                    <label for="Adresse" class="mt-3">Adresse : <sup>*</sup></label>
                    <input type="text" name="Adresse" class="form-control form-control-lg <?php echo (!empty($data['Adresse_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Adresse']; ?>">
                    <span class="invalid-feedback"><?php echo $data['Adresse_err']; ?></span>
                    <!-- ville client -->
                    <label for="ville" class="mt-3">ville : <sup>*</sup></label>
                    <input type="text" name="ville" class="form-control form-control-lg <?php echo (!empty($data['ville_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['ville']; ?>">
                    <span class="invalid-feedback"><?php echo $data['ville_err']; ?></span>
                    <!-- email client -->
                    <label for="email" class="mt-3">email : <sup>*</sup></label>
                    <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['email']; ?>">
                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    <!-- password -->
                    <label for="password" class="mt-3">password : <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    <!-- confirme password -->
                    <label for="name" class="mt-3">confirm password : <sup>*</sup></label>
                    <input type="password" name="confirm_password" class="form-control form-control-lg <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="submit" value="Register" class="btn text-dark btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>/users/login" class="btn btn-light btn-block">have an account ? login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include APPROOT.'/views/inc/footer.php'; ?>