<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Stocks</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
            <div class="pe-4 fs-5">All Stocks</div>
            <div class="">
                <select class="form-select form-select-sm" aria-label="Default select example">
                    <option selected>Sort by</option>
                    <option value="1">Asc</option>
                    <option value="2">Desc</option>
                </select>
            </div>
        </div>
    </div>
    <div class="card mb-3">
        <div class="table-responsive">
            <table id="productTable" class="table rwd-table mb-0">
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-header="Product Name" class="gc_flex fw-bold"><a>Rosalind Bracelet in 925 Silver</a></td>
                        <td data-header="Quantity">5</td>
                        <td data-header="Action" class="text-md-end">
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                        </td>
                    </tr>
                    <tr>
                        <td data-header="Product Name" class="gc_flex fw-bold"><a>Oxidised Sassy Spirit Ring</a></td>
                        <td data-header="Quantity">3</td>
                        <td data-header="Action" class="text-md-end">
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                        </td>
                    </tr>
                    <tr>
                        <td data-header="Product Name" class="gc_flex fw-bold"><a>7 Stone Necklace Gold Plated Silver</a></td>
                        <td data-header="Quantity">7</td>
                        <td data-header="Action" class="text-md-end">
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                        </td>
                    </tr>
                    <tr>
                        <td data-header="Product Name" class="gc_flex fw-bold"><a>Oxidised Ring in 925 Silver</a></td>
                        <td data-header="Quantity">2</td>
                        <td data-header="Action" class="text-md-end">
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                        </td>
                    </tr>
                    <tr>
                        <td data-header="Product Name" class="gc_flex fw-bold"><a>Oxidised Earrings in 925 Silver</a></td>
                        <td data-header="Quantity">3</td>
                        <td data-header="Action" class="text-md-end">
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                            <a href="#"><img src="<?php echo $url; ?>/assets/Images/delete.png" alt="" class="ed_btn"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../partials/footer.php") ?>