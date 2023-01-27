<?php include APPROOT . '/views/inc/sidebare.php'; ?>


<div class="container-fluid px-4">
    <div class="row g-3 my-2">
        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">720</h3>
                    <p class="fs-5">Products</p>
                </div>
                <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">4920</h3>
                    <p class="fs-5">Sales</p>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">3899</h3>
                    <p class="fs-5">Delivery</p>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                <div>
                    <h3 class="fs-2">%25</h3>
                    <p class="fs-5">Increase</p>
                </div>

            </div>
        </div>
    </div>
    <!-- table commandes -->
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Commands</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">Id</th>
                        <th scope="col">la date de création</th>
                        <th scope="col">date d’envoi</th>
                        <th scope="col">date de livraison</th>
                        <th scope="col">le Client</th>
                        <th scope="col">Le Produit</th>
                    </tr>
                </thead>
                <tbody>
                    


                </tbody>
            </table>
        </div>
    </div>
    <!-- table produit -->
    <div class="row my-5">
        <h3 class="fs-4 mb-3">Products</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">Id</th>
                        <th scope="col">Name product</th>
                        <th scope="col">référence</th>
                        <th scope="col">code barre</th>
                        <th scope="col">prix d’achat</th>
                        <th scope="col">prix final</th>
                        <th scope="col">prix offre</th>
                        <th scope="col">description </th>
                        <th scope="col">catégorie </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['products'] as $product ) : ?>
                    <tr>
                        <th scope="row"><?php ECHO $product->id_Produit ?></th>
                        <td><?php ECHO $product->reference ?></td>
                        <td><?php ECHO $product->libelle ?></td>
                        <td><?php ECHO $product->code_barre ?></td>
                        <td><?php ECHO $product->prix_achat ?></td>
                        <td><?php ECHO $product->prix_final ?></td>
                        <td><?php ECHO $product->prix_offre ?></td>
                        <td><?php ECHO $product->descreption ?></td>
                        <td><?php ECHO $product->id_categorie ?></td>
                    </tr>
                    <?php endforeach ; ?>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- table categorie -->
    <div class="row my-5">
        <h3 class="fs-4 mb-3">categories</h3>
        <div class="col">
            <table class="table bg-white rounded shadow-sm  table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">Id</th>
                        <th scope="col">Name categorie</th>
                        <th scope="col">description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Television</td>
                        <td>Jonny</td>
                    </tr>



                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- /#page-content-wrapper -->
</div>

<?php include APPROOT . '/views/inc/footerD.php'; ?>