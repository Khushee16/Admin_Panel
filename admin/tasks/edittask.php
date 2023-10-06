<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Edit Task</div>
                <div class="ms-auto">
                    <a href="./tasks.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-12 form-floating">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="" value="Task 1" />
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
                                <option value="1" selected>Task 1</option>
                                <option value="2">Task 2</option>
                                <option value="3">Task 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 input-group-customize ">
                        <label for="" class="mb-2">Services </label>
                        <div class="custom-select" >
                            <select>
                                <option value="0">Select Services :</option>
                                <option value="1" selected>SEO</option>
                                <option value="2">Web Design</option>
                                <option value="3">Web Maintainence</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="" class="mb-2 ">Team Members</label>
                        <select data-placeholder="Select Multiple Members..." multiple class="chosen-select w-100" name="test">
                            <option value=""></option>
                            <option selected>Member One</option>
                            <option selected>Member Two</option>
                            <option>Member Three</option>
                        </select>
                    </div>
                    <div class="col-md-6 input-group-customize ">
                        <label for="" class="mb-2">Priority </label>
                        <div class="custom-select" >
                            <select>
                                <option value="0">Select Priority :</option>
                                <option value="1">Low</option>
                                <option value="2" selected>Medium</option>
                                <option value="3">High</option>
                                <option value="3">Urgent</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 form-floating">
                        <textarea type="text" class="form-control" name="address" id="Address" row="7" ></textarea>
                        <label for="Address" class="form-label">Description</label>
                    </div>
                    <div class="col-12 form-floating">
                        <input type="file" class="form-control" name="image" id="Image" />
                        <label htmlFor="Image" class="form-label">Upload File </label>
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
    <script>
        $(".chosen-select").chosen({
            no_results_text: "Oops, nothing found!"
        })
    </script>
<?php include("../partials/footer.php") ?>