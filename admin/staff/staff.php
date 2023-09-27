<?php include("../partials/header.php") ?>
    <div class="gc_row px-md-4 px-2 staff">
        <div class="card mt-md-3 mb-3">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-md-3 p-2">
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Staff</li>
                </ol>
            </nav>
        </div>
        <div class="card my-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-md-4 pe-2 fs-5 ">All Staff</div>
                <div class="row g-md-4 g-2">
                    <div class="col-sm-7">
                        <select class="form-select form-select-sm" aria-label="Default select example">
                            <option selected>Sort by</option>
                            <option value="1">Asc</option>
                            <option value="2">Desc</option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <select class="form-select form-select-sm" aria-label="Default select example">
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
                        <a href="#"><img src="<?php echo $url; ?>/assets/Images/search.png" alt="" class="ed_btn me-md-3 ms-2 ms-md-0"></a>
                        <a href="./addstaff.php" class="btn gc_btn d-md-flex align-items-center d-none "><span class="fs-4 me-2">+</span>Add Staff</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="gc_bottom_btn fixed-bottom "> <a href="./addstaff.php" class="btn gc_btn d-flex align-items-center d-block d-md-none"><span class="fs-4 me-2">+</span>Add Staff</a></div>
        <div class="card mb-md-0 mb-3">
            <div class="table-responsive">
                <table class="table rwd-table mb-0">
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
                            <td data-header="Name"><a href="./viewstaff.php">Test</a></td>
                            <td data-header="Email">Test123@gmail.com</td>
                            <td data-header="Phone Number">9856781236</td>
                            <td data-header="Agent">Agent1</td>
                            <td data-header="Status" class="gc_flex">
                            <div class="dropdown header">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Verified by Agent
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Verified by Agent</a></li>
                                        <li><a class="dropdown-item" href="#">Not Verified by Agent</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td data-header="Created At">04/07/2023</td>
                            <td data-header="Action"  class="gc_flex">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="./editstaff.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                    <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td data-header="Name"><a href="./viewstaff.php">Test2</a></td>
                            <td data-header="Email">Test123@gmail.com</td>
                            <td data-header="Phone Number">712354498</td>
                            <td data-header="Agent">Agent2</td>
                            <td data-header="Status"  class="gc_flex">
                                <div class="dropdown header">
                                    <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Verified by Agent
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Verified by Agent</a></li>
                                        <li><a class="dropdown-item" href="#">Not Verified by Agent</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td data-header="Created At">04/07/2023</td>
                            <td data-header="Action"  class="gc_flex">
                                <div class="d-flex align-items-center justify-content-end">
                                    <a href="./editstaff.php"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
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