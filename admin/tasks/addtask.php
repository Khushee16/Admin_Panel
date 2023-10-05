<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Add Task</div>
                <div class="ms-auto">
                    <a href="./tasks.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-12 form-floating">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="" />
                        <label for="subject" class="form-label">Subject</label>
                    </div>
                    <div class="col-md-6 ">
                        <label for="Phone" class="form-label">Start Date</label>
                        <div class="ui calendar mb-2" id="example1">
                            <div class="ui input left icon w-100">
                                <i class="fa-solid fa-calendar-days p-3 d-flex align-items-center bg-light"></i>
                                <input class="form-control mb-0" type="text" placeholder="Date/Time">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <label for="Phone" class="form-label">Due Date</label>
                        <div class="ui calendar mb-2" id="example1">
                            <div class="ui input left icon w-100">
                                <i class="fa-solid fa-calendar-days p-3 d-flex align-items-center bg-light"></i>
                                <input class="form-control mb-0" type="text" placeholder="Date/Time">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 input-group-customize ">
                        <label for="" class="mb-2">Task List </label>
                        <div class="custom-select" >
                            <select>
                                <option value="0">Select Task List :</option>
                                <option value="1">Task 1</option>
                                <option value="2">Task 2</option>
                                <option value="3">Task 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 input-group-customize ">
                        <label for="" class="mb-2">Task List </label>
                        <div class="custom-select" >
                            <select>
                                <option value="0">Select Task List :</option>
                                <option value="1">Task 1</option>
                                <option value="2">Task 2</option>
                                <option value="3">Task 3</option>
                            </select>
                        </div>
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