<?php include APPROOT . '/views/inc/sidebare.php'; ?>

<div class="row my-5 container">
    <a href="<?php echo URLROOT; ?>/products/addProduct" class="btn btn-success col-lg-1 ml-3">add</a>
    <h3 class="fs-4 mb-3">Products</h3>
    <div class="col">
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead>
                <tr>
                    <th scope="col-lg-1" width="50">Id</th>
                    <th scope="colgroup">Name product</th>
                    <th scope="col">référence</th>
                    <th scope="col">code barre</th>
                    <th scope="col">prix d’achat</th>
                    <th scope="col">prix final</th>
                    <th scope="col">prix offre</th>
                    <th scope="col">description </th>
                    <th scope="col">catégorie </th>
                    <th scope="col">action </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Television</td>
                    <td>Jonny</td>
                    <td>$1200</td>
                    <td>Television</td>
                    <td>Jonny</td>
                    <td>$1200</td>
                    <td>Television</td>
                    <td>Jonny</td>
                    <td class="text-center">

                        <a href=""><i class="fas fa-solid fa-pen color-pen mx-3" style="color: blue; margin-left: 2px;"></i></a>
                        <a href=""> <i class="fas fa-solid fa-trash" style="color: red;"></i></a>

                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>
                    <td>$750</td>
                    <td>Laptop</td>
                    <td>Kenny</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php include APPROOT . '/views/inc/footerD.php'; ?>