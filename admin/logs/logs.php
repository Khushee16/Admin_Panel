<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Logs</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
            <div class="pe-4 fs-5">All Logs</div>
            <div class="row g-md-4 g-2">
                <div class="col-sm-7">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Sort by</option>
                        <option value="1">Asc</option>
                        <option value="2">Desc</option>
                    </select>
                </div>
                <div class="col-sm-5">
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
        </div>
    </div>
    <div class="card mb-3">
        <div class="table-responsive">
            <table id="example" class="table rwd-table mb-0" cellspacing="0" width="100%">
            <thead>
                        <tr>
                            <th>#</th>
                            <th>User</th>
                            <th>Module</th>
                            <th>Log</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-header="ID">1</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="gc_flex">Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">2</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (Oxidised Sassy Spirit Ring) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">3</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (7 Stone Necklace Gold Plated Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">4</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (Oxidised Ring in 925 Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">5</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (Oxidised Earrings in 925 Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">6</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Category</td>
                            <td data-header="Log" class="d-flex">Category (Earrings) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">7</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Category</td>
                            <td data-header="Log" class="d-flex">Category (Necklaces) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">8</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Category</td>
                            <td data-header="Log" class="d-flex">Category (Rings) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">9</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Category</td>
                            <td data-header="Log" class="d-flex">Category (Bracelets) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">10</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Category</td>
                            <td data-header="Log" class="d-flex">Category (Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">11</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                        <tr>
                            <td data-header="ID">12</td>
                            <td data-header="User">Admin</td>
                            <td data-header="Module">Product</td>
                            <td data-header="Log" class="d-flex">Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td data-header="Created At">11-07-2023</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>