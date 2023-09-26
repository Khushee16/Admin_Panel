<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Settings</li>
            </ol>
        </nav>
    </div>
    <div class=" my-3">
        <div class="d-md-flex align-items-start">
            <div class="card me-3 settings_left mb-md-0 mb-2 settings gc_view">
                <div class="card-body">
                    <div class="nav flex-md-column nav-pills d-md-block d-flex me-3 " id="v-pills-tab" role="tablist"
                        aria-orientation="vertical">
                        <button class="nav-link active color-light" id="v-pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-general" type="button" role="tab" aria-controls="v-pills-home"
                            aria-selected="true">General Settings</button>
                        <button class="nav-link color-light" id="v-pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Company Information</button>
                        <button class="nav-link color-light" id="v-pills-email-tab" data-bs-toggle="pill"
                            data-bs-target="#v-pills-email" type="button" role="tab" aria-controls="v-pills-email"
                            aria-selected="false">Email Settings</button>
                    </div>
                </div>
            </div>
            <div class="card settings_right">
                <div class="card-body">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-general" role="tabpanel"
                            aria-labelledby="v-pills-home-tab" tabindex="0">
                            <h2 class="pb-4">General Settings</h2>
                            <form>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-3 col-form-label">Logo</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="image" class="col-sm-3 col-form-label">Favicon</label>
                                    <div class="col-sm-9">
                                        <input type="file" class="form-control" id="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="name" class="col-sm-3 col-form-label">Company Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" value="Emily">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="url" class="col-sm-3 col-form-label">Site URL</label>
                                    <div class="col-sm-9">
                                        <input type="url" class="form-control" id="url" value="http://emilysession.com">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="date" class="col-sm-3 col-form-label">Date Format</label>
                                    <div class="col-sm-9">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>09/05/2023 03:05:15 PM</option>
                                            <option value="1">9/5/06 3:5:15 PM</option>
                                            <option value="2">Sat Aug 05 2023</option>
                                            <option value="3">Saturday, August 05 2023</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="color" class="col-sm-3 col-form-label">Color Picker</label>
                                    <div class="col-sm-9">
                                        <div class="d-sm-flex d-block">
                                            <div class="pt-sm-0 pt-3"><a href="#" class="p-2 me-3 black_box rounded">Dark Theme</a></div>
                                            <div class="mt-sm-0 mt-4"><a href="#" class="p-2 me-3 rounded gradient_box ">Gradient Theme</a></div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn gc_btn mt-4">Submit</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab" tabindex="0">
                            <h2 class="pb-4">Company Information</h2>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-3 col-form-label">Company Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" value="Emily">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="address" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="address" value="A-33">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="city" value="Ahmedabad">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="state" class="col-sm-3 col-form-label">State</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="state" value="Gujarat">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="code" class="col-sm-3 col-form-label">Postal Code</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="code" value="380058">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="code" class="col-sm-3 col-form-label">Contact Number</label>
                                <div class="col-sm-9">
                                    <input type="contact" class="form-control" id="contsct" value="7456984799">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="gst" class="col-sm-3 col-form-label">GST Number</label>
                                <div class="col-sm-9">
                                    <input type="gst" class="form-control" id="gst" value="22AAAAA0000A1Z5">
                                </div>
                            </div>
                            <button type="submit" class="btn gc_btn mt-4">Submit</button>
                        </div>
                        <div class="tab-pane fade" id="v-pills-email" role="tabpanel"
                            aria-labelledby="v-pills-email-tab" tabindex="0">
                            <h2 class="pb-4">Email Settings</h2>
                            <div class="row mb-3">
                                <label for="Email" class="col-sm-3 col-form-label">Email ID</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="Email" value="Emily@gmail.com">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password" value="Emily">
                                </div>
                            </div>
                            <button type="submit" class="btn gc_btn mt-4">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include("../partials/footer.php") ?>