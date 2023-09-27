<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reports</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body d-sm-flex d-block  align-items-center p-lg-3 p-2 staff_header">
            <div class="pe-4 fs-5">All Reports</div>
            <div class="row py-sm-0 py-2">
                <div class="col-7">
                    <select class="form-select form-select-sm" aria-label="Default select example">
                        <option selected>Sort by</option>
                        <option value="1">Asc</option>
                        <option value="2">Desc</option>
                    </select>
                </div>
                <div class="col-5">
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
        </div>
    </div>
    <div class="card mb-3">
        <div class="table-responsive">
            <table id="example" class="table rwd-table mb-0" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Bill No.</th>
                        <th>Customer Name</th>
                        <th>Phone Number</th>
                        <th>Amount</th>
                        <th>Products</th>
                        <th>Agent Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Payment Type</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody class="records">
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Nia</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Ashish</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Rakesh</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Mira</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Aarohi</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Payal</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Rajesh</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Priyanshu</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                    <tr>
                        <td data-header="Bill No.">PU-152</td>
                        <td data-header="Customer Name">Stavya</td>
                        <td data-header="Phone Number">4587963210</td>
                        <td data-header="Amount">8500</td>
                        <td data-header="Products" class="gc_flex">Rosalind Bracelet in 925 Silver</td>
                        <td data-header="Agent Name">Rakesh</td>
                        <td data-header="Address" class="d-flex">
                            132, My Street,<br />
                            Kingston, New York 12401.<br />
                            United States.
                        </td>
                        <td data-header="Status">paid</td>
                        <td data-header="Payment Type">Cash</td>
                        <td data-header="Created At">11/7/2023</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                        <th>51000</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>