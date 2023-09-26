<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php $url = 'http://localhost/admin_panel'; ?>
    <?php $url_route = 'http://localhost/admin_panel/admin'; ?>
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/media.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <div class="gc_login">
        <div class="login">
            <div class="card  m-auto">
                <div class="login_box d-lg-flex align-items-center">
                    <div class="login_left p-lg-5">
                        <div class=" text-center">
                            <!-- <img src="<?php echo $url; ?>\Assets\Images\header_logo.png" alt=""
                                class="w-75 img-fluid mb-md-4 md-2"> -->
                            <h2 class="pb-5">LogIn</h2>
                            <form action="">
                                <div class="inputBox my-4">
                                    <label for="" class="float-start mb-2">Username</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text px-2" id="basic-addon1"><img
                                                src="<?php echo $url; ?>\Assets\Images\login_user.png" alt=""></span>
                                        <input type="text" class="form-control" placeholder="Username"
                                            aria-label="Username" aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="inputBox my-4">
                                    <label for="" class="float-start mb-2">Password</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text px-2" id="basic-addon2"><img
                                                src="<?php echo $url; ?>\Assets\Images\login_pw.png" alt=""></span>
                                        <input type="password" class="form-control" placeholder="Password"
                                            aria-label="Password" aria-describedby="basic-addon2">
                                    </div>
                                </div>
                                <div class="btn gc_btn mt-4"> Submit</div>
                            </form>
                        </div>
                    </div>
                    <div class="login_right">
                        <div class="login_img d-flex align-items-center justify-content-center">
                            <h1>Emily Sessions Skincare</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>