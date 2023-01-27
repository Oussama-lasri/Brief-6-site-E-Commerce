<?php include APPROOT . '/views/inc/sidebare.php'; ?>

<div class="row my-5 container-fluid">
    <a href="<?php echo URLROOT; ?>/products/addProduct" class="btn btn-success col-lg-1 ml-3">add</a>
    <h3 class="fs-4 mb-3">Products</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover text-center">
            <thead>
                <tr>
                    <th class="col-lg-1" >Id</th>
                    <th class="col-lg-1">Name product</th>
                    <th class="col-lg-1">référence</th>
                    <th class="col-lg-1">code barre</th>
                    <th class="col-lg-1">prix d’achat</th>
                    <th class="col-lg-1">prix final</th>
                    <th class="col-lg-1">prix offre</th>
                    <th class="col-lg-2">description </th>
                    <th class="col-lg-1">catégorie </th>
                    <th class="col-lg-1">image </th>
                    <th class="col-lg-2">action </th>
                </tr>
            </thead>
            <tbody class="justify-content-center text-center">
                <?php foreach ($data['products'] as $product) : ?>
                    <tr>
                        <th scope="row"><?php echo $product->id_Produit ?></th>
                        <td><?php echo $product->reference ?></td>
                        <td><?php echo $product->libelle ?></td>
                        <td><?php echo $product->code_barre ?></td>
                        <td><?php echo $product->prix_achat ?></td>
                        <td><?php echo $product->prix_final ?></td>
                        <td><?php echo $product->prix_offre ?></td>
                        <td><?php echo $product->descreption ?></td>
                        <td><?php echo $product->id_categorie ?></td>
                        <td class="col-lg-1">image</td>
                        <td class="text-center col-lg">
                            <a href="<?php echo URLROOT ?>/Products/deleteProduct/<?php echo $product->id_Produit  ?>"> <i class="fas fa-solid fa-trash" style="color: red;"></i></a>
                            <a href="<?php echo URLROOT ?>/Products/updateProduct/<?php echo $product->id_Produit  ?>"><i class="fas fa-solid fa-pen color-pen mx-3" style="color: blue; margin-left: 2px;"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>




            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include APPROOT . '/views/inc/footerD.php'; ?>