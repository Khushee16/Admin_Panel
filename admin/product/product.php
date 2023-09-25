<?php include("../partials/header.php") ?>
    <div class="gc_row px-md-4 px-2">
        <div class="card">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-3">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
        <div class="card my-3">
            <div class="card-body  d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">All Products</div>
                <div class="row">
                    <div class="col-12">
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Sort by</option>
                            <option value="1">Asc</option>
                            <option value="2">Desc</option>
                        </select>
                    </div>
                </div>
                <!-- <div class="gc_dropdown">
                    <ul class="list-unstyled">
                        <li class="init">Sort By...</li>
                        <li data-value="value 1">Asc</li>
                        <li data-value="value 2">Desc</li>
                    </ul>
                </div> -->
                <div class="ms-auto">
                    <div class="d-flex align-items-center">
                        <a href="#" class="d-none d-sm-block"><img src="<?php echo $url; ?>/assets/Images/search.png" alt="" class="ed_btn me-3"></a>
                        <a href="./addproduct.php" class="btn gc_btn d-flex align-items-center  d-none d-md-flex"><span class="fs-4 me-2">+</span> Add Product</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gc_bottom_btn fixed-bottom customer"> <a href="./addproduct.php" class="btn gc_btn d-flex align-items-center d-block d-md-none"><span class="fs-4 me-2">+</span>Add Product</a></div>
        <div class="card  mb-md-0 mb-3">
            <div class="table-responsive">
                <table class="table rwd-table mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Barcode</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-header="Name" class="gc_flex"><a href="./viewproduct.php">Ozonized Purifying Cleanser</a></td>
                            <td data-header="Barcode"><img src="<?php echo $url; ?>/assets/Images/barcode.png" alt="" class="barcode me-3"></td>
                            <td data-header="Price">3000</td>
                            <td data-header="Image"><img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="barcode me-3"></td>
                            <td data-header="Category">Cleanser</td>
                            <td data-header="Status">04/07/2023</td>
                            <td data-header="Action"  class="gc_flex">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="./editproduct.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-header="Name" class="gc_flex"><a href="./viewproduct.php">Ozonized Purifying Cleanser</a></td>
                            <td data-header="Barcode"><img src="<?php echo $url; ?>/assets/Images/barcode.png" alt="" class="barcode me-3"></td>
                            <td data-header="Price">3000</td>
                            <td data-header="Image"><img src="<?php echo $url; ?>/assets/Images/cleanser1.jpg" alt="" class="barcode me-3"></td>
                            <td data-header="Category">Cleanser</td>
                            <td data-header="Status">04/07/2023</td>
                            <td data-header="Action"  class="gc_flex"> 
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="./editproduct.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>