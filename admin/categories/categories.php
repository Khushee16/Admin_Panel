<?php include("../partials/header.php") ?>

<div class="gc_row px-4 categories">
    <div class="card mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Categories</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="card mb-2">
                <div class="card-body d-flex align-items-center">
                    <h5 class="mb-0 py-1">Add Categories</h5>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-3">
                    <form class="row g-3 py-2">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="name" id="Name"required />
                            <label for="Name" class="form-label">Category Name </label>
                        </div>
                        <div class="col-md-12 mb-2">
                            <!-- <label for="Parent" class="form-label">Parent</label> -->
                            <select name="parent" id="Parent" class="form-control">
                                <option value="0" selected hidden>Select Parent Category</option>
                                <option value="1">Necklaces</option>
                                <option value="2">Earings</option>
                                <option value="3">Rings</option>
                                <option value="4">Braclets</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group ">
                            <input type="file" name="image" id="Image" class="form-control py-4 px-4" />
                            <label for="Image" class="form-label">Category Image</label>
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea  class="form-control" id="Desc" name="Desc" required></textarea>
                            <label for="desc" class="form-label">Product Description </label>
                        </div>
                        <div class="col-12 mt-4">
                            <a href="/category" class="btn gc_btn">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="card mb-2">
                <div class="card-body d-flex align-items-center p-3">
                    <div class="pe-4 fs-5">All Categories</div>
                    <div class="gc_dropdown">
                        <ul class="list-unstyled">
                            <li class="init">Sort By...</li>
                            <li data-value="value 1">Asc</li>
                            <li data-value="value 2">Desc</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table id="" class="table rwd-table w-100 mb-0" >
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-header="Category Name">Future Texture Toner</td>
                                <td data-header="Image"><img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="barcode me-3"></td>
                                <td data-header="Action">
                                    <div class="text-end">
                                        <a href="./editcategories.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                        <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td data-header="Category Name">Ozonized Purifying Cleanser</td>
                                <td data-header="Image"><img src="<?php echo $url; ?>/assets/Images/cleanser1.jpg" alt="" class="barcode me-3"></td>
                                <td data-header="Action">
                                    <div class="text-end">
                                        <a href="./editcatgories.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                        <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>