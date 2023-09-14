<?php include("../partials/header.php") ?>

    <div class="gc_row px-4">
        <div class="card mt-3 mb-3">
            <div class="card-body d-flex align-items-center p-3">
                <div class="pe-4 fs-5">Edit Customer</div>
                <div class="ms-auto">
                    <a href="./customer.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card p-3 ">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="Name" placeholder="User Name" />
                    </div>
                    <div class="col-md-6">
                        <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" name="phone" id="Phone" placeholder="User phone" />
                    </div>
                    <div class="col-md-6">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="User Email Address" />
                    </div>
                    <input type="hidden" name="role" value="2"/>
                    <div class="col-md-6">
                        <label for="GST" class="form-label">Gst Number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="gst_number" id="GST" placeholder="GST Number" />
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password <span class="text-danger">(Leave blank if don't want to change)</span></label>
                        <div class="input-group">
                        <input  class="form-control" id="password" name="password" placeholder=" " type={showPassword ? 'text' : 'password'} />
                            <!-- <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-lg getNewPass eyeBtn" onClick={togglePasswordVisibility}>
                                    <BsEyeFill />
                                </button>
                            </span> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="Status" class="form-label">Status <span class="text-danger">*</span></label>
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