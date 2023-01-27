<?php include APPROOT . '/views/inc/sidebare.php'; ?>

<div class="row my-5 container-fluid">
    <a href="<?php echo URLROOT; ?>/categories/addCategorie" class="btn btn-success col-lg-1 ml-3">add</a>
    <h3 class="fs-4 mb-3">Categorie</h3>
    <div class="col">
            <table class="table bg-white rounded shadow-sm table-hover text-center">
                <thead>
                    <tr>
                        <th  width="50">Id</th>
                        <th class="col-lg-3">Name categorie</th>
                        <th class="col-lg-2">image</th>
                        <th class="col-lg-4">description</th>
                        <th class="col-lg-3">action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach( $data['Categories'] as $categorie) : ?>
                    <tr>
                        <th scope="row"><?php echo $categorie->id_categorie ?></th>
                        <td><?php echo $categorie->Nom_categorie  ?></td>
                        <td><?php echo $categorie->Photo_categorie  ?></td>
                        <td><?php echo $categorie->Descreption ?></td>
                        <td class="text-center col-lg">
                            <a href="<?php echo URLROOT ?>/Categories/deleteCategorie/<?php echo $categorie->id_categorie ?><?php   ?>"> <i class="fas fa-solid fa-trash" style="color: red;"></i></a>
                            <a href="<?php echo URLROOT ?>/Categories/updateCategorie/<?php echo $categorie->id_categorie ?><?php   ?>"><i class="fas fa-solid fa-pen color-pen mx-3" style="color: blue; margin-left: 2px;"></i></a>
                        </td>
                    </tr>
                    <?php endforeach  ?>
                </tbody>
            </table>
        </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include APPROOT . '/views/inc/footerD.php'; ?>