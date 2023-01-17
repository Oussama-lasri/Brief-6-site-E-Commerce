<?php include APPROOT . '/views/inc/sidebare.php'; ?>


<div class="container-fluid px-4">
    <div class="row my-5">
    <a href="<?php echo URLROOT; ?>/Product/addProduct"  type="button" class="col-1 btn btn-success mx-2 my-3 ">Add</a>
        <h3 class="fs-4 mb-3">Products</h3>
        <div class="col" id>
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
                        <th scope="col text-danger">update </th>
                        <th scope="col">delete </th>
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
                        <td><a href="" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i>edit</a></td>
                        <form action=""><td><button class="btn btn-danger "><i class="fas fa-trash"></i>delete</button></td></form>
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
                        <td><a href="" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i>edit</a></td>
                        <form action=""><td><button class="btn btn-danger "><i class="fas fa-trash"></i>delete</button></td></form>

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
                        <td><a href="" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i>edit</a></td>
                        <form action=""><td><button class="btn btn-danger "><i class="fas fa-trash"></i>delete</button></td></form>

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
                        <td><a href="" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i>edit</a></td>
                        <form action=""><td><button class="btn btn-danger "><i class="fas fa-trash"></i>delete</button></td></form>

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
                        <td><a href="" class="btn btn-success"><i class="fas fa-edit" aria-hidden="true"></i>edit</a></td>
                        <form action=""><td><button class="btn btn-danger "><i class="fas fa-trash"></i>delete</button></td></form>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>





<?php include APPROOT . '/views/inc/footerD.php'; ?>