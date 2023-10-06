<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php $url = 'http://localhost/admin_panel'; ?>
    <?php $url_route = 'http://localhost/admin_panel/admin'; ?>
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/style.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/media.css">
    <!-- <link href="<?php echo $url; ?>/Assets/Css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/datatable_buttons.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/Assets/Css/datepicker_semantic.min.css">
    <link href="<?php echo $url; ?>/Assets/Css/shortable.css" rel="stylesheet">
    <script src="<?php echo $url; ?>/Assets/JS/3.5.1_jquery.min.js" charset="utf-8"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
    <link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

    
</head>
<body>
    <script>
        document.onreadystatechange = function () {
        var state = document.readyState
        if (state == 'interactive') {
            document.getElementById('gc-main').style.visibility="hidden";
        } else if (state == 'complete') {
            setTimeout(function(){
                document.getElementById('interactive');
                document.getElementById('load').style.visibility="hidden";
                document.getElementById('gc-main').style.visibility="visible";
            },2000);
        }
        }
    </script>
    <div id="load"></div>
    <div class="gc-main px-0 " id="gc-main">
        <div class="row header_row mx-0 py-2 sticky-top shadow-lg">
            <div class="col-2 p-0 d-none d-md-block">
                <div class="pt-4 header_logo ps-2 ">
                    <a href="<?php echo $url_route; ?>/"><img src="<?php echo $url; ?>\Assets\Images\header_logo.png" alt="" class="header_logo "></a>
                </div>
            </div>
            <div class="col-md-10 col-12 p-0">
                <div class="header py-1 px-3">
                    <div class="d-flex align-items-center">
                        <div id="menu-btn" class="toggle_bar me-4 me-md-5"><img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/toggle_bar.png" alt=""> </div>
                        <div class="d-none d-md-block"><h4 class="mb-0 pt-1 ">Dashboard</h4></div>
                        <div class="d-block d-md-none"><a href="<?php echo $url_route; ?>/"><img src="<?php echo $url; ?>\Assets\Images\header_logo.png" alt="" class="header_logo "></a></div>
                        <div class="d-flex ms-auto align-items-center">
                            <!-- <img src=".\Assets\Images\Sidebar_Icons\notification.png" alt="" class="noti_bell me-4"> -->
                            <!-- <img src=".\Assets\Images\Sidebar_Icons\profile.png" alt="" class="profile"> -->
                            <div class="nav-item">
                                <a href="#" onclick="openNav()" class="nav-link nav-link-notify pe-3 p-md-3"  data-sidebar-target="#notifications">
                                    <img src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\notification.png" alt="" class="noti_bell">
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="nav-link dropdown-toggle profile-dropdown sub-menu me-3" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                                        <img src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png" class="rounded-circle profile" alt='userProfile'/>
                                </a>
                                <ul class="dropdown-menu" >
                                    <li class=''><a class="dropdown-item fs-6 py-2" href="<?php echo $url_route; ?>/profile/view_profile.php">My Profile</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" href="<?php echo $url_route; ?>/profile/edit_profile.php">Edit Profile</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" href="<?php echo $url_route; ?>/settings/settings.php">Settings</a> </li>
                                    <li class=''><a class="dropdown-item fs-6 py-2" href="<?php echo $url; ?>/">Logout</a> </li>
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
        <div class="container-fluid px-0 ">
        <div class="w-100 d-flex gc_main_content">
            <div  id="sidebar" class="side_normal px-0">
            <?php include("sidebar.php") ?>
            </div>
            <div  id="content" class="content_normal p-0 pt-md-4 pt-3">
                
        
   