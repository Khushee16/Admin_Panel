<?php include("../partials/header.php") ?>

<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
            <div class="pe-4 fs-5 ">Add Staff</div>
            <div class="ms-auto">
                <a href="./staff.php" class="btn gc_btn">Go Back</a>
            </div>
        </div>
    </div>
    <div class="card mb-md-0 mb-3">
        <div class="card-body">
            <form class="row g-md-4 g-sm-3 g-2">
                <div class="col-md-6 form-floating">
                    <input type="text" class=" form-control" placeholder="">
                    <label>Name</label>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" />
                    <label for="Phone" class="form-label">User Email Address</label>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="tel" class="form-control" name="phone" id="Phone" placeholder="" />
                    <label for="Phone" class="form-label">User Phone Number</label>
                </div>
                <div class="col-md-6 ">
                    <select name="agent" id="Agent" class="form-control mt-md-2">
                        <option value="0">Select Agent</option>
                        <option value="1">Agent 1</option>
                        <option value="2">Agent 2</option>
                        <option value="3">Gocinico</option>
                    </select>
                </div>
                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" name="gst_number" id="GST" placeholder="" />
                    <label for="GST" class="form-label">Gst Number </label>
                </div>
                <div class="col-md-6 ">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="" />
                        <label for="password" class="form-label">Password</label>
                    </div>
                    <div>
                        <input type="checkbox" onclick="showpw()" class="mx-2 my-3">Show Password
                    </div>
                </div>
                <div class="col-md-6 ">
                    <label for="Status" class="">Status <span class="text-danger">*</span></label>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" />
                    </div>
                </div>
                <div class="col-12 form-floating">
                    <button type="submit" class="btn gc_btn mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
function showpw() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>
<?php include("../partials/footer.php") ?>