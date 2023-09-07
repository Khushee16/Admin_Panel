<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href=".\Assets\Css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
    <div class=" gc-main px-0">
        <div class="row header_row mx-0 py-2">
            <div class="col-2 p-0">
                <div class="pt-4 header_logo ps-2">
                    <img src=".\Assets\Images\header_logo.png" alt="" class="header_logo ">
                </div>
            </div>
            <div class="col-10 p-0">
                <div class="header py-1 px-3">
                    <div class="d-flex align-items-center">
                        <div id="menu-btn" class="toggle_bar me-5"><img src="./Assets/Images/Sidebar_Icons/toggle_bar.png" alt=""> </div>
                        <div><h4 class="mb-0">Dashboard</h4></div>
                        <div class="d-flex ms-auto align-items-center">
                            <!-- <img src=".\Assets\Images\Sidebar_Icons\notification.png" alt="" class="noti_bell me-4"> -->
                            <!-- <img src=".\Assets\Images\Sidebar_Icons\profile.png" alt="" class="profile"> -->
                            <div class="nav-item">
                                <a href="#" onclick="openNav()" class="nav-link nav-link-notify p-3" " data-sidebar-target="#notifications">
                                    <!--<i class="bi bi-bell icon-lg"></i>-->
                                    <img src=".\Assets\Images\Sidebar_Icons\notification.png" alt="" class="profile">
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle profile-dropdown sub-menu me-3" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                                        <img src=".\Assets\Images\Sidebar_Icons\profile.png" class="rounded-circle profile" alt='userProfile'/>
        
                                </a>
                                <ul class="dropdown-menu" >
                                    <li class=''><a class="dropdown-item fs-6 py-2" to="/">My Profile</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" to="/">Edit Profile</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" to="/">Settings</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" to="/">Logout</a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar sidepanel" id="notifications">
            <div class="p-3">
                <div class="sidebar-header d-block align-items-end">
                    <div class="align-items-center d-flex justify-content-between py-4" >
                        <h4>Notifications</h4>
                        <div role='button'  onClick="CloseNav()">
                        <h4 >X</h4>
                        </div>
                    </div>
                </div>
                <div class="sidebar-content">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activities">
                            <div class="tab-pane-body">
                                <ul class="list-unstyled list-group-flush">
                                    <li class="px-2 ">
                                        <p class="mb-0 fw-bold houmanity-color d-flex justify-content-between">
                                            No New Notification
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
        <div class="w-100 d-flex">
            <div  id="sidebar" class="side_normal px-0">
            <?php include("sidebar.php") ?>
            </div>
            <div  id="content" class="content_normal p-0">
                
        
   
