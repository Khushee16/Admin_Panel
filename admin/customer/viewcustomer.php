<?php include("../partials/header.php") ?>
    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">View Customer</div>
                <div class="ms-auto">
                    <a href="./customer.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card  customer gc_view">
            <div class="card-body">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a href="#pills-profile" class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#pills-orders" class="nav-link" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false">Orders</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#pills-cart" class="nav-link" id="pills-cart-tab" data-bs-toggle="pill" data-bs-target="#pills-cart" type="button" role="tab" aria-controls="pills-cart" aria-selected="false">Dealer</a>
                    </li>
                </ul>
                <div class="tab-content " id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="ps-3 mt-3 view_bg1" >
                                            <h6>
                                                <span class="font-weight-bold">
                                                Name
                                                </span>
                                            </h6>
                                            <p class="mb-1">Test</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ps-3 mt-3 view_bg2" >
                                            <h6>
                                                <span class="font-weight-bold">
                                                Phone Number
                                                </span>
                                            </h6>
                                            <p class="mb-1">9874563210</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ps-3 mt-3 view_bg3" >
                                            <h6>
                                                <span class="font-weight-bold">
                                                Email Address
                                                </span>
                                            </h6>
                                            <p class="mb-1">test123@test.com</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ps-3 mt-3 view_bg4" >
                                            <h6>
                                                <span class="font-weight-bold">
                                                    Created At
                                                </span>
                                            </h6>
                                            <p class="mb-1">2023-07-13 09:54:18</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="ps-3 mt-3 view_bg2" >
                                            <h6>
                                                <span class="font-weight-bold">
                                                    Address
                                                </span>
                                            </h6>
                                            <p class="mb-1">
                                                Ahmedabad
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-orders" role="tabpanel" aria-labelledby="pills-orders-tab">
                        <div class="houmanity-card">
                            <div class="table-responsive"> 
                                <table id="" class="table table-custom rwd-table w-100" >
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Order Amount</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-header="Order ID"><a href="./customer.php" class="text-primary">1</a></td>
                                            <td data-header="Customer Name">Test</td>
                                            <td data-header="Phone Number">9874563210</td>
                                            <td data-header="Address">
                                                Ahmedabad
                                            </td>
                                            <td data-header="Order Amount">1505</td>
                                            <td data-header="Status">
                                                <span class="badge bg-success">Payment Done</span>
                                            </td>
                                            <td data-header="Created At">2023-09-14 06:07:30</td>
                                            <td data-header="Action" class="text-md-end">
                                                <a href="./customer.php" class="btn gc_btn">View Order</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">
                        <div class="houmanity-card">
                            <div class="table-responsive">
                                <table id="" class="table rwd-table w-100" >
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Customer</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-header="Name"><a href="./viewcustomer.php">Test2</a></td>
                                            <td data-header="Email">Test123@gmail.com</td>
                                            <td data-header="Phone Number">712354498</td>
                                            <td data-header="Customer">Customer1</td>
                                            <td data-header="Status"  class="gc_flex">
                                                <select class="form-select form-select-sm w-75">
                                                    <option value="Verified" defaultValue="selected">Verified </option>
                                                    <option value="NotVerified">Not Verified </option>
                                                </select>
                                            </td>
                                            <td data-header="Created At">04/07/2023</td>
                                            <td data-header="Action"  class="gc_flex">
                                                <div class="d-flex align-items-center justify-content-end">
                                                    <a href="./editcustomer.php"><img src="<?php echo $url; ?>/Assets/Images/edit.png" alt="" class="ed_btn me-2"></a>
                                                    <a href="#"><img src="<?php echo $url; ?>/Assets/Images/delete.png" alt="" class="ed_btn"></a>
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
        </div>
    </div>

<?php include("../partials/footer.php") ?>