<?php include("../partials/header.php") ?>

<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-3">
                <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tasks</li>
            </ol>
        </nav>
    </div>
    <div class="card my-3">
        <div class="card-body d-sm-flex d-block  align-items-center p-lg-3 p-2 staff_header ">
            <div class="pe-4 fs-5 ">All Tasks</div>
            <div class="ms-auto">
                <div class="d-flex align-items-center">
                    <a href="#" class="btn gc_btn d-flex align-items-center me-3"><span class="fs-4 me-2">+</span>Add
                        List</a>
                    <a href="./addtask.php" class="btn gc_btn d-flex align-items-center "><span
                            class="fs-4 me-2">+</span>Add Task</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="menu-box">
                <ul class="menu-list">
                    <h3>Task</h3>
                    <li class="mb-4 p-2">
                        <div href="#" class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <h4 class="mb-0"><i class="fa-solid fa-bars-staggered me-4"
                                        style="color: #ffffff;"></i>Test
                                    1</h4>
                                <div class="Tselect  ms-4">
                                    <input type="hidden" name="selected_option[value]" value="">
                                    <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                        readonly>

                                    <div class="options">
                                        <div class="option" value="Not Started">Not Started</div>
                                        <div class="option" value="In Progress" aria-selected="true">In Progress</div>
                                        <div class="option" value="Completed">Completed</div>
                                    </div>
                                    <span class="select-icon">
                                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.05473 5.78032C5.74791 6.07323 5.24964 6.07323 4.94282 5.78032L0.230113 1.28119C-0.0767041 0.988283 -0.076704 0.512595 0.230113 0.219683C0.53693 -0.0732283 1.0352 -0.0732283 1.34202 0.219683L5.5 4.18922L9.65798 0.222027C9.9648 -0.0708847 10.4631 -0.0708847 10.7699 0.222027C11.0767 0.514938 11.0767 0.990627 10.7699 1.28354L6.05718 5.78266L6.05473 5.78032Z"
                                                fill="#000000" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="d-flex ms-4">
                                    <h4 class="mb-0 me-2">Due:</h4><Span>Jan 16th,2024</Span>
                                </div>
                                <a href="#" title="Test" class="ms-4"><img
                                        src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png" alt=""
                                        width="35px"></a>
                                <div class="Tselect  ms-4">
                                    <input type="hidden" name="selected_option[value]" value="">
                                    <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                        readonly>
                                    <div class="options">
                                        <div class="option" value="Low">Low</div>
                                        <div class="option" value="Medium" aria-selected="true">Medium</div>
                                        <div class="option" value="High">High</div>
                                        <div class="option" value="Urgent">Urgent</div>
                                    </div>
                                    <span class="select-icon">
                                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6.05473 5.78032C5.74791 6.07323 5.24964 6.07323 4.94282 5.78032L0.230113 1.28119C-0.0767041 0.988283 -0.076704 0.512595 0.230113 0.219683C0.53693 -0.0732283 1.0352 -0.0732283 1.34202 0.219683L5.5 4.18922L9.65798 0.222027C9.9648 -0.0708847 10.4631 -0.0708847 10.7699 0.222027C11.0767 0.514938 11.0767 0.990627 10.7699 1.28354L6.05718 5.78266L6.05473 5.78032Z"
                                                fill="#000000" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="task_icons">
                                <a href="#"><img src="<?php echo $url; ?>\Assets\Images\pluse.png" alt=""></a>
                                <a href="#"><img src="<?php echo $url; ?>\Assets\Images\edit.png" alt=""></a>
                                <a href="#"><img src="<?php echo $url; ?>\Assets\Images\calendar.png" alt=""></a>
                                <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png" alt=""></a>
                            </div>
                        </div>
                        <ul class="submenu-list">
                            <li class="p-2 my-2">
                                <a href="#">
                                    <div class="d-flex align-items-cener">
                                        <i class="fa-solid fa-ellipsis-vertical me-3" style="color: #ffffff;"></i>
                                        <input type="checkbox" name="vat-check" class="vat-checkbox me-3 mb-0">
                                        <span class="vat-value" id="vat">1 396,500</span>
                                    </div>
                                </a>
                            </li>
                            <li class="p-2 my-2"><a href="#">submenu 2.2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">menu 3</a></li>
                    <li><a href="#">menu 1</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('.menu-list, .submenu-list').sortable({
        connectWith: '.menu-list, .submenu-list',
        receive: function(event, ui) {
            var senderList = $(ui.sender).attr('class');
            var receiverList = $(this).attr('class');

            if (senderList !== receiverList) {
                $(ui.sender).sortable('cancel');
            }
        }
    }).disableSelection();
});
</script>
<?php include("../partials/footer.php") ?>