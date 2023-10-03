<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Add Customer</div>
                <div class="ms-auto">
                    <a href="./customer.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="name" id="Name" placeholder="" />
                        <label for="Name" class="form-label">User Name</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="form-control" name="email" id="email"  placeholder="" />
                        <label for="Phone" class="form-label">User Email Address</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="tel" class="form-control" name="phone" id="Phone"  placeholder="" />
                        <label for="Phone" class="form-label">User Phone Number</label>
                    </div>
                    <div class="col-md-6 input-group">
                        <select name="state" id="State" class="form-control select" >
                            <option value="0">Select State</option>
                            <option value="1">Gujarat</option>
                            <option value="2">Rajasthan</option>
                            <option value="3">Maharashtra</option>
                        </select>
                    </div>
                    <div class="col-md-6 input-group">
                        <select name="city" id="City" class="form-control select" >
                            <option value="0">Select City</option>
                            <option value="1">Ahmedabad</option>
                            <option value="2">Gujarat</option>
                            <option value="3">Baroda</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="locality" id="Locality"  placeholder="" />
                        <label for="Locality" class="form-label">Locality</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="floor_no" id="Floor"  placeholder="" />
                        <label for="Floor" class="form-label">Floor No / Block No / Office No</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="address" id="Address"  placeholder=""  />
                        <label for="Address" class="form-label">Address</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input class="form-control" id="password" name="password"    placeholder=""  />
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div class="col-md-6">
                        <label for="Status" class="">
                            Status <span class="text-danger">*</span>
                        </label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" />
                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn gc_btn mt-3">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>