<?php include("../partials/header.php") ?>

    <div class="gc_row px-4">
        <div class="card mt-3 mb-3">
            <div class="card-body d-flex align-items-center p-3">
                <div class="pe-4 fs-5">Add Staff</div>
                <div class="ms-auto">
                    <a href="./staff.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" id="Name" placeholder="User Name" />
                    </div>
                    <div class="col-md-6">
                        <label for="Phone" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="User Email Address" />
                    </div>
                    <div class="col-md-6">
                        <label for="Phone" class="form-label">Phone <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control" name="phone" id="Phone" placeholder="User Phone Number" />
                    </div>
                    <div class="col-md-6">
                        <label for="Agent" class="form-label">Agent <span class="text-danger">*</span></label>
                        <select name="agent" id="Agent" class="form-control" >
                            <option value="0">Select Agent</option>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                            <option value="3">Gocinico</option>
                        </select> 
                    </div>
                    <div class="col-md-6">
                        <label for="GST" class="form-label" >Gst Number </label>
                        <input type="text" class="form-control" name="gst_number" id="GST" placeholder="GST Number" required />
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input  type="{password" class="form-control" id="password" name="password" placeholder=" " />
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
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn gc_btn mt-3">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>