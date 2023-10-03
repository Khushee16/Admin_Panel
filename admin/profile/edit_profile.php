<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body">
            <div class="row py-md-4 g-md-4 g-2">
                <div class="col-md-4 text-center">
                    <img src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png"
                        class="rounded-circle img-fluid view_profile_img" alt='userProfile' />
                    <h1>Test</h1>
                    <div class=" form-floating edit_profile">
                        <input type="file" class="form-control form-control-sm w-md-100 w-75 m-auto " name="image" id="Image" />
                        <label htmlFor="Image" class="form-label">Change Image </label>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row mb-3">
                        <label for="fname" class="col-sm-2 col-form-label">First Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="fname" value="Test">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="lname" class="col-sm-2 col-form-label">Last Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lname" value="Test">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">Email ID</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" value="Test@test.com">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="number" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="contact" class="form-control" id="number" value="7498883294">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Address" value="Bopal, Ahmedabad">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" value="test">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">New Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" value="test">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" value="test">
                        </div>
                    </div>
                    <a href="" class="btn gc_btn mt-4">Save</a>
                </div>
            </div>
        </div>
    </div>


    <?php include("../partials/footer.php") ?>