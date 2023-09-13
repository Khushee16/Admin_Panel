<?php include("../partials/header.php") ?>
    <div class="gc_row px-4">
        <div class="card">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-3">
                    <li class="breadcrumb-item"><a href="./index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                </ol>
            </nav>
        </div>
        <div class="card my-3">
            <div class="card-body d-flex align-items-center p-3">
                <div class="pe-4 fs-5">All Staff</div>
                <div class="row">
                    <div class="col-7">
                        <select class="form-select classic order-table" aria-label="Default select example">
                            <option selected>Sort by</option>
                            <option value="1">Desc</option>
                            <option value="2">Asc</option>
                        </select>
                    </div>
                    <div class="col-5">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>10</option>
                            <option value="1">20</option>
                            <option value="2">30</option>
                            <option value="3">40</option>
                            <option value="4">50</option>
                            <option value="5">100</option>
                        </select>
                    </div>
                </div>
                <div class="ms-auto">
                    <div class="d-flex align-items-center">
                        <a href="#"><img src="<?php echo $url; ?>/assets/Images/search.png" alt="" class="ed_btn me-3"></a>
                        <a href="./addstaff.php" class="btn gc_btn "><img src="<?php echo $url; ?>/assets/Images/add.png" alt="" class="ed_btn me-3">Add Staff</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <table class="table table-dark mb-0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Agent</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th class="text-end">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Test</td>
                            <td>Test123@gmail.com</td>
                            <td>9856781236</td>
                            <td>Agent1</td>
                            <td>
                                <select class="form-select form-select-sm w-75">
                                    <option value="Verified" defaultValue="selected">Verified by Agent</option>
                                    <option value="NotVerified">Not Verified by Agent</option>
                                </select>
                            </td>
                            <td>04/07/2023</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Test2</td>
                            <td>Test123@gmail.com</td>
                            <td>712354498</td>
                            <td>Agent2</td>
                            <td>
                                <select class="form-select form-select-sm w-75">
                                    <option value="Verified" defaultValue="selected">Verified by Agent</option>
                                    <option value="NotVerified">Not Verified by Agent</option>
                                </select>
                            </td>
                            <td>04/07/2023</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
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