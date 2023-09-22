<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
                <div class="pe-4 fs-5">Edit Staff</div>
                <div class="ms-auto">
                    <a href="./staff.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card  mb-md-0 mb-3">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control form-control-lg" id="Name"  REQUIRED/>
                        <label for="Name" >Name </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="tel" class="form-control" name="phone" id="Phone" REQUIRED/>
                        <label for="Phone" class="form-label">User Phone Number</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" REQUIRED />
                        <label for="Email" class="form-label">User Email Address</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <select name="agent" id="" class="form-control mt-md-2">
                            <option value="0">Select Agent</option>
                            <option value="1">Agent 1</option>
                            <option value="2">Agent 2</option>
                            <option value="3">Gocinico</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="text" class="form-control" name="gst_number" id="GST" REQUIRED />
                        <label for="GST" class="form-label">Gst Number </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input  class="form-control" id="password" name="password" REQUIRED/>
                        <label for="password" class="form-label">Password (If want to change)</label>
                            <!-- <span class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-lg getNewPass eyeBtn" onClick={togglePasswordVisibility}>
                                    <BsEyeFill />
                                </button>
                            </span> -->
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
                        <button type="submit" class="btn gc_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>