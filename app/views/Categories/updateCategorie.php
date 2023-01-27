<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/bootstrap/css/bootstrap.min.css">
    <title><?php echo SITENAME; ?></title>
</head>

<body>
    <div class="row" style="padding-top:120px ;" id="col">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-3 m-5">
                <h2>create A categorie</h2>
                <p>please fill out this form to register with us</p>
                <form action="<?php echo URLROOT; ?>/categories/updateCategorie/<?php echo $data['id_categorie'] ?>" method="post">
                    <div class="form-group">
                        <!-- Name_categorie -->
                        <label for="Name categorie">Name_categorie : <sup>*</sup></label>
                        <input type="text" name="Name_categorie" class="form-control form-control-lg <?php echo (!empty($data['Name_categorie_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['Name_categorie']; ?>">
                        <span class="invalid-feedback"><?php echo $data['Name_categorie_err']; ?></span>
                        <!-- prix d'achat -->
                        <label for="image_categorie" class="mt-3">images categorie : <sup>*</sup></label>
                        <input type="file" name="image_categorie" class="form-control form-control-lg <?php echo (!empty($data['image_categorie_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['image_categorie']; ?>">
                        <span class="invalid-feedback"><?php echo $data['image_categorie_err']; ?></span>
                        
                        <!-- description  -->
                        <label for="description" class="mt-3">description : <sup>*</sup></label>
                        <textarea  name="description" class="form-control form-control-lg <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '' ?>" ><?php echo $data['description']; ?></textarea>
                        <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>


                       
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="submit" value="Register" class="btn text-light btn-success ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>