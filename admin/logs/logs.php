<?php include("../partials/header.php") ?>
<div class="gc_row px-4">
    <div class="card">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reports</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body d-flex align-items-center p-3">
            <div class="pe-4 fs-5">All Reports</div>
            <div class="row">
                <div class="col-7">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Sort by</option>
                        <option value="1">Asc</option>
                        <option value="2">Desc</option>
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
                            <td>1</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Oxidised Sassy Spirit Ring) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (7 Stone Necklace Gold Plated Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Oxidised Ring in 925 Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Oxidised Earrings in 925 Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Admin</td>
                            <td>Category</td>
                            <td>Category (Earrings) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Admin</td>
                            <td>Category</td>
                            <td>Category (Necklaces) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Admin</td>
                            <td>Category</td>
                            <td>Category (Rings) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Admin</td>
                            <td>Category</td>
                            <td>Category (Bracelets) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Admin</td>
                            <td>Category</td>
                            <td>Category (Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Admin</td>
                            <td>Product</td>
                            <td>Product (Rosalind Bracelet in 925 Silver) Created Successfully.</td>
                            <td>11-07-2023</td>
                        </tr>
                    </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>