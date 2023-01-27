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
                <h2>create A product</h2>
                <p>please fill out this form to register with us</p>
                <form action="<?php echo URLROOT; ?>/Products/updateProduct/<?php echo $data['id_produit']; ?>" method="post">
                    <div class="form-group">
                        <!-- reference -->
                        <label for="reference">reference : <sup>*</sup></label>
                        <input type="text" name="reference" class="form-control form-control-lg <?php echo (!empty($data['reference_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['reference']; ?>">
                        <span class="invalid-feedback"><?php echo $data['reference_err']; ?></span>
                        <!-- libelle -->
                        <label for="libelle" class="mt-3">libelle : <sup>*</sup></label>
                        <input type="text" name="libelle" class="form-control form-control-lg <?php echo (!empty($data['libelle_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['libelle']; ?>">
                        <span class="invalid-feedback"><?php echo $data['libelle_err']; ?></span>
                        <!-- code bare -->
                        <label for="code_barre" class="mt-3">code bare : <sup>*</sup></label>
                        <input type="text" name="code_barre" class="form-control form-control-lg <?php echo (!empty($data['code_barre_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['code_barre']; ?>">
                        <span class="invalid-feedback"><?php echo $data['code_barre_err']; ?></span>
                        <!-- prix d'achat -->
                        <label for="prix_achat" class="mt-3">prix d'achat : <sup>*</sup></label>
                        <input type="number" name="prix_achat" class="form-control form-control-lg <?php echo (!empty($data['prix_achat_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['prix_achat']; ?>">
                        <span class="invalid-feedback"><?php echo $data['prix_achat_err']; ?></span>
                        <!-- prix final -->
                        <label for="prix_final" class="mt-3">prix final : <sup>*</sup></label>
                        <input type="number" name="prix_final" class="form-control form-control-lg <?php echo (!empty($data['prix_final_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['prix_final']; ?>">
                        <span class="invalid-feedback"><?php echo $data['prix_final_err']; ?></span>
                        <!-- prix offre -->
                        <label for="prix_offre" class="mt-3">prix offre : <sup>*</sup></label>
                        <input type="number" name="prix_offre" class="form-control form-control-lg <?php echo (!empty($data['prix_offre_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['prix_offre']; ?>">
                        <span class="invalid-feedback"><?php echo $data['prix_offre_err']; ?></span>
                        <!-- Categorie -->
                        <label for="Categorie" class="mt-3 ">categorie de produit : <sup>*</sup></label>
                        <select class="form-select" name="Categorie" aria-label="Default select example is-invalid <?php echo (!empty($data['Categorie_err'])) ? 'is-invalid' : '' ?>" value="<?php echo $data['confirm_password']; ?>">
                            <option selected>----- Categorie -----</option>
                            <option value="1">One</option>
                            <option value="1">Two</option>
                            <option value="1">Three</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $data['Categorie_err']; ?></span>
                        <!--  -->
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