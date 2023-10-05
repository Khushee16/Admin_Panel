<?php include("../partials/header.php") ?>

<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Staff Loyalty Points</li>
            </ol>
        </nav>
    </div>
    <div class="row mb-md-0 mb-3 g-md-4 g-2">
        <div class="col-lg-5">
            <div class="card mb-2">
                <div class="card-body d-sm-flex  align-items-center  px-3 staff_header">
                    <h5 class="mb-sm-0  me-3">All Staff</h5>
                    <div class="ui calendar " id="example1">
                        <div class="ui input left icon">
                            <i class="fa-solid fa-calendar-days p-3 d-flex align-items-center bg-light" ></i>
                            <input class="form-control mb-0" type="text" placeholder="Date/Time">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table id="" class="table rwd-table w-100 mb-0">
                        <thead>
                            <tr>
                                <th>Staff Name</th>
                                <th>Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-header="Product Name">Moren</td>
                                <td data-header="Count">5000</td>
                            </tr>
                            <tr>
                                <td data-header="Product Name">Egawen</td>
                                <td data-header="Count">4000</td>
                            </tr>
                            <tr>
                                <td data-header="Product Name">Matt</td>
                                <td data-header="Count">4500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card p-3" style="height:450px; width:100%;">
                <div id="chartContainer_loyalty"></div>
            </div>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>