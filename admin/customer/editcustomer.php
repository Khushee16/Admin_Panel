<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center  p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Edit Customer</div>
                <div class="ms-auto">
                    <a href="./customer.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card mb-3 mb-md-0 ">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="name" id="Name" placeholder=""  />
                        <label for="Name" class="form-label">User Name</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="tel" class="form-control" name="phone" id="Phone"  placeholder=""/>
                        <label for="Phone" class="form-label">User phone</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="email" class="form-control" name="email" id="email"  placeholder=""/>
                        <label for="Email" class="form-label">User Email Address</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="text" class="form-control" name="gst_number" id="GST"  placeholder=""/>
                        <label for="GST" class="form-label">Gst Number</label>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input  class="form-control" id="password" name="password" type="password"  placeholder=""/>
                        <label for="password" class="form-label">Password (If want to change)</span></label>
                            <!-- <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-lg getNewPass eyeBtn" onClick={togglePasswordVisibility}>
                                    <BsEyeFill />
                                </button>
                            </span> -->
                    </div>
                    <div class="col-md-6 ">
                        <label for="Status" class="">Status <span class="text-danger">*</span></label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="status" id="flexSwitchCheckChecked" />
                            <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="hidden" name="user_id" />
                        <button type="submit" class="btn gc_btn mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>