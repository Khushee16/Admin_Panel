<div id="menu" class="gc-sidebar open ">
    <div id="side" class=" ">
        <div class="p-3 sidebar_menu side-bar ">
            <h4 class=" py-3"><span class="">Company</span></h4>
            <div class="menu">
                <div class="item active">
                    <a href="<?php echo $url_route; ?>/index.php" class="d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/dashboard.png" alt="">
                        <span>Dashboard</span>
                    </a>
                </div>
                <div class="item">
                    <a class="sub-btn d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/staff.png" alt="">
                        <span>Staff</span>
                        <i class="fas fa-angle-down dropdown"></i>
                    </a>
                    <div class="sub-menu ">
                        <a href="<?php echo $url_route; ?>/staff/staff.php" class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/staff.png" alt="">
                            <span>Staff</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/loyalty/loyalty.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/loyalty.png" alt="">
                            <span>Staff Loyalty Points</span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href="<?php echo $url_route; ?>/customer/customer.php" class="d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/customer.png" alt="">
                        <span>Customer</span>
                    </a>
                </div>
                <div class="item">
                    <a class="sub-btn d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/product.png" alt="">
                        <span>Products</span>
                        <i class="fas fa-angle-down dropdown"></i>
                    </a>
                    <div class="sub-menu">
                        <a href="<?php echo $url_route; ?>/product/product.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/product.png" alt="">
                            <span>Products</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/categories/categories.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/categories.png" alt="">
                            <span>Categories</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/stocks/stocks.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/stocks.png" alt="">
                            <span>Stocks</span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a class="sub-btn d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/company.png" alt="">
                        <span>Company</span>
                        <i class="fas fa-angle-down dropdown"></i>
                    </a>
                    <div class="sub-menu">
                        <a href="<?php echo $url_route; ?>/company/department.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/department.png" alt="">
                            <span>Department</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/company/designation.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/categories.png" alt="">
                            <span>Designation</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/company/employee.php"
                            class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/employee.png" alt="">
                            <span>Employees</span>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <a href="<?php echo $url_route; ?>/pos/pos.php" class="d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/pos.png" alt="">
                        <span>POS</span>
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $url_route; ?>/calendar/calendar.php" class="d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/calendar.png" alt="">
                        <span>Calendar</span>
                    </a>
                </div>
                <div class="item">
                    <a class="sub-btn d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/login.png" alt="">
                        <span>Logins</span>
                        <i class="fas fa-angle-down dropdown"></i>
                    </a>
                    <div class="sub-menu">
                        <a href="<?php echo $url_route; ?>/auth/login.php" class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/login_sub.png" alt="">
                            <span>First</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/auth/login2.php" class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/login_sub.png" alt="">
                            <span>Second</span>
                        </a>
                        <a href="<?php echo $url_route; ?>/auth/login3.php" class="sub-item d-flex align-items-center">
                            <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/login_sub.png" alt="">
                            <span>Third</span>
                        </a>
                    </div>
                </div>
            </div>
            <h4 class=" "><span class="">Task Management</span></h4>
            <div class="menu">
                <div class="item ">
                    <a href="<?php echo $url_route; ?>/tasks/tasks.php" class="d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/task-list.png" alt="">
                        <span>Tasks</span>
                    </a>
                </div>
            </div>
            <h4 class=""><span class="">Reports</span></h4>
            <div class="menu">
                <div class="item ">
                    <a href="<?php echo $url_route; ?>/reports/reports.php" class="sub-item d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/report.png" alt="">
                        <span>Reports</span>
                    </a>
                </div>
                <div class="item">
                    <a href="<?php echo $url_route; ?>/logs/logs.php" class="sub-item d-flex align-items-center">
                        <img src="<?php echo $url; ?>/Assets/Images/Sidebar_Icons/logs.png" alt="">
                        <span>Logs</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>