<?php include("../partials/header.php") ?>
    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
                <div class="pe-4 fs-5">View Test</div>
                <div class="ms-auto">
                    <a href="./staff.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card staff gc_view">
            <div class="card-body">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                    <a href="#pills-profile" class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#pills-orders" class="nav-link" id="pills-orders-tab" data-bs-toggle="pill" data-bs-target="#pills-orders" type="button" role="tab" aria-controls="pills-orders" aria-selected="false">Orders</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#pills-cart" class="nav-link" id="pills-cart-tab" data-bs-toggle="pill" data-bs-target="#pills-cart" type="button" role="tab" aria-controls="pills-cart" aria-selected="false">Cart Items</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#pills-statement" class="nav-link" id="pills-statement-tab" data-bs-toggle="pill" data-bs-target="#pills-statement" type="button" role="tab" aria-controls="pills-statement" aria-selected="false">Statement</a>
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
                                                GST Number
                                                </span>
                                            </h6>
                                            <p class="mb-1">ADTG7824BJGR</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="ps-3 mt-3 view_bg1" >
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
                                            <td data-header="Order ID"><a href="./staff.php" class="text-primary">1</a></td>
                                            <td data-header="Customer Name">Test</td>
                                            <td data-header="Phone Number">9874563210</td>
                                            <td data-header="Address">
                                                Ahmedabad
                                            </td>
                                            <td data-header="Order Amount">1505</td>
                                            <td data-header="Status">
                                                <span class="badge bg-success">Payment Done</span>
                                            </td>
                                            <td data-header="Created At">2023-07-13 09:54:18</td>
                                            <td data-header="Action" class="text-md-end gc_flex">
                                                <a href="./staff.php" class="btn gc_btn">View Order</a>
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
                                            <th>#</th>
                                            <th>Product</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-statement" role="tabpanel" aria-labelledby="pills-statement-tab">
                            <form class="row pt-2 g-md-4 g-2">
                                <fieldset class="col-md-4">
                                    <h6>Select option for statement period:</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Today
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked/>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Week
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Month
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1"/>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Year
                                        </label>
                                    </div>
                                </fieldset>
                                <fieldset class="col-md-6">
                                    <h6>Select appropriate option to view or download statement:</h6>
                                    <div class="">
                                        <div>
                                            <input type="radio" id="view" class="option" name="option" value="view" checked/>
                                            <label for="view">View</label>
                                        </div>
                                        <div>
                                            <input type="radio" id="download" class="option"  name="option" value="download"/>
                                            <label for="download">Download</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="mt-3">
                                    <input type="hidden" name="user_id" />
                                    <button type="submit" class="submit_options btn gc_btn">Submit</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>