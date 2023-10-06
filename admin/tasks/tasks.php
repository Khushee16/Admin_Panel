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
                    <a href="#" class="btn gc_btn d-flex align-items-center me-3" data-bs-toggle="modal"
                        data-bs-target="#staticBackdrop1"><span class="fs-4 me-2">+</span>Add
                        List</a>

                    <a href="./addtask.php" class="btn gc_btn d-flex align-items-center "><span
                            class="fs-4 me-2">+</span>Add Task</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-5">
        <div class="card-body">
            <div class="menu-box">
                <div class="row menu-list">
                    <div class="col-md-6">
                        <div class="mb-4 p-4 task_box rounded">
                            <div class="d-flex justify-content-between">
                                <h3>Task First</h3>
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical" style="color: #ffffff;"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./edittask.php">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-bars-staggered me-4" style="color: #ffffff;"></i>
                                    <h4 class="mb-0 mt-0 task_title">Test1</h4>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" title="Test" class="ms-4"><img
                                            src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png" alt=""
                                            width="35px"></a>
                                    <div class="d-flex ms-4 due">
                                        <h4 class="mb-0 me-2">Due:</h4><Span>Jan 16th,2024</Span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">

                                        <div class="options">
                                            <div class="option bg-danger" value="Not Started">Not Started</div>
                                            <div class="option bg-info" value="In Progress" aria-selected="true">In
                                                Progress
                                            </div>
                                            <div class="option bg-success" value="Completed">Completed</div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">
                                        <div class="options">
                                            <div class="option bg-secondary" value="Low">Low</div>
                                            <div class="option bg-info" value="Medium">Medium</div>
                                            <div class="option bg-warning text-dark" value="High" aria-selected="true">
                                                High</div>
                                            <div class="option bg-danger" value="Urgent">Urgent</div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="task_icons">
                                    <a href="#" type="button" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2"><img
                                            src="<?php echo $url; ?>\Assets\Images\pluse.png" alt=""></a>
                                    <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png" alt=""></a>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropCal"><img src="<?php echo $url; ?>\Assets\Images\calendar.png" alt=""></a>
                                    <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png" alt=""></a>
                                </div>
                            </div>
                            <ul class="submenu-list submenu-list2">
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <a  onclick="addTask()"><h3 class="text-info mb-2">+ Add Task</h3></a>
                                <div id="myTask" >
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
                                                    <label for="" class="mb-2">Services </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Services :</option>
                                                            <option value="1">SEO</option>
                                                            <option value="2">Web Design</option>
                                                            <option value="3">Web Maintainence</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-2 w-100">Team Members</label>
                                                    <select data-placeholder="Select Multiple Members..." multiple class="chosen-select " name="test">
                                                        <option value=""></option>
                                                        <option>Member One</option>
                                                        <option>Member Two</option>
                                                        <option>Member Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 input-group-customize ">
                                                    <label for="" class="mb-2">Priority </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Priority :</option>
                                                            <option value="1">Low</option>
                                                            <option value="2">Medium</option>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4 p-4 task_box rounded">
                            <div class="d-flex justify-content-between">
                                <h3>Task Second</h3>
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical" style="color: #ffffff;"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="./edittask.php">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-bars-staggered me-4" style="color: #ffffff;"></i>
                                    <h4 class="mb-0 mt-0 task_title">Test1</h4>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" title="Test" class="ms-4"><img
                                            src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png" alt=""
                                            width="35px"></a>
                                    <div class="d-flex ms-4 due">
                                        <h4 class="mb-0 me-2">Due:</h4><Span>Jan 16th,2024</Span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">

                                        <div class="options">
                                            <div class="option bg-danger" value="Not Started">Not Started</div>
                                            <div class="option bg-info" value="In Progress" aria-selected="true">In
                                                Progress
                                            </div>
                                            <div class="option bg-success" value="Completed">Completed</div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">
                                        <div class="options">
                                            <div class="option bg-secondary" value="Low">Low</div>
                                            <div class="option bg-info" value="Medium">Medium</div>
                                            <div class="option bg-warning text-dark" value="High">High</div>
                                            <div class="option bg-danger" value="Urgent" aria-selected="true">Urgent
                                            </div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="task_icons">
                                    <a href="#" type="button" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2"><img
                                            src="<?php echo $url; ?>\Assets\Images\pluse.png" alt=""></a>
                                    <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png" alt=""></a>
                                    <a href="#" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropCal"><img src="<?php echo $url; ?>\Assets\Images\calendar.png" alt=""></a>
                                    <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png" alt=""></a>
                                </div>
                            </div>
                            <ul class="submenu-list submenu-list2">
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <a  onclick="addTask()"><h3 class="text-info mb-2">+ Add Task</h3></a>
                                <div id="myTask" >
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
                                                    <label for="" class="mb-2">Services </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Services :</option>
                                                            <option value="1">SEO</option>
                                                            <option value="2">Web Design</option>
                                                            <option value="3">Web Maintainence</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-2 w-100">Team Members</label>
                                                    <select data-placeholder="Select Multiple Members..." multiple class="chosen-select " name="test">
                                                        <option value=""></option>
                                                        <option>Member One</option>
                                                        <option>Member Two</option>
                                                        <option>Member Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 input-group-customize ">
                                                    <label for="" class="mb-2">Priority </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Priority :</option>
                                                            <option value="1">Low</option>
                                                            <option value="2">Medium</option>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4 p-4 task_box rounded">
                            <div class="d-flex justify-content-between">
                                <h3>Task Third</h3>
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical" style="color: #ffffff;"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-3 justify-content-between">
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-bars-staggered me-4" style="color: #ffffff;"></i>
                                    <h4 class="mb-0 mt-0 task_title">Test1</h4>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" title="Test" class="ms-4"><img
                                            src="<?php echo $url; ?>\Assets\Images\Sidebar_Icons\profile.png" alt=""
                                            width="35px"></a>
                                    <div class="d-flex ms-4 due">
                                        <h4 class="mb-0 me-2">Due:</h4><Span>Jan 16th,2024</Span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">

                                        <div class="options">
                                            <div class="option bg-danger" value="Not Started">Not Started</div>
                                            <div class="option bg-info" value="In Progress" aria-selected="true">In
                                                Progress
                                            </div>
                                            <div class="option bg-success" value="Completed">Completed</div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                    <div class="Tselect  ms-4">
                                        <input type="hidden" name="selected_option[value]" value="">
                                        <input type="text" name="selected_option[label]" value="" placeholder="Select.."
                                            readonly class="mb-0">
                                        <div class="options">
                                            <div class="option bg-secondary" value="Low" aria-selected="true">Low</div>
                                            <div class="option bg-info" value="Medium">Medium</div>
                                            <div class="option bg-warning text-dark" value="High">High</div>
                                            <div class="option bg-danger" value="Urgent">Urgent</div>
                                        </div>
                                        <span class="Tselect-icon">
                                            <i class="fa-solid fa-sort-down" style="color: #ffffff;"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="task_icons">
                                    <a href="#" type="button" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop2"><img
                                            src="<?php echo $url; ?>\Assets\Images\pluse.png" alt=""></a>
                                    <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png" alt=""></a>
                                    <a href="#" type="button" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdropCal"><img
                                            src="<?php echo $url; ?>\Assets\Images\calendar.png" alt=""></a>
                                    <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png" alt=""></a>
                                </div>
                            </div>
                            <ul class="submenu-list submenu-list2">
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="p-3 my-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <i class="fa-solid fa-ellipsis-vertical me-4" style="color: #ffffff;"></i>
                                            <input type="checkbox" name="vat-check" class="vat-checkbox me-4 mb-0">
                                            <h4 class="vat-value mt-0" id="vat">Testing</h4>
                                        </div>
                                        <div class="task_icons">
                                            <a href="./edittask.php"><img src="<?php echo $url; ?>\Assets\Images\edit.png"
                                                    alt=""></a>
                                            <a href="#"><img src="<?php echo $url; ?>\Assets\Images\delete.png"
                                                    alt=""></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div>
                                <a  onclick="addTask()"><h3 class="text-info mb-2">+ Add Task</h3></a>
                                <div id="myTask" >
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
                                                    <label for="" class="mb-2">Services </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Services :</option>
                                                            <option value="1">SEO</option>
                                                            <option value="2">Web Design</option>
                                                            <option value="3">Web Maintainence</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-2 w-100">Team Members</label>
                                                    <select data-placeholder="Select Multiple Members..." multiple class="chosen-select " name="test">
                                                        <option value=""></option>
                                                        <option>Member One</option>
                                                        <option>Member Two</option>
                                                        <option>Member Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 input-group-customize ">
                                                    <label for="" class="mb-2">Priority </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Priority :</option>
                                                            <option value="1">Low</option>
                                                            <option value="2">Medium</option>
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
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-4 p-4 task_box rounded">
                            <div class="d-flex justify-content-between">
                                <h3>Task Fourth</h3>
                                <div class="dropdown">
                                    <a class=" dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical" style="color: #ffffff;"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <a  onclick="addTask()"><h3 class="text-info mb-2">+ Add Task</h3></a>
                                <div id="myTask" >
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
                                                    <label for="" class="mb-2">Services </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Services :</option>
                                                            <option value="1">SEO</option>
                                                            <option value="2">Web Design</option>
                                                            <option value="3">Web Maintainence</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="" class="mb-2 w-100">Team Members</label>
                                                    <select data-placeholder="Select Multiple Members..." multiple class="chosen-select " name="test">
                                                        <option value=""></option>
                                                        <option>Member One</option>
                                                        <option>Member Two</option>
                                                        <option>Member Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-6 input-group-customize ">
                                                    <label for="" class="mb-2">Priority </label>
                                                    <div class="custom-select" >
                                                        <select>
                                                            <option value="0">Select Priority :</option>
                                                            <option value="1">Low</option>
                                                            <option value="2">Medium</option>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add List Modal -->
<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" form-group mb-3">
                    <label for="name" class=" mb-2">Title <span class="text-danger ms-1">*</span></label>
                    <input type="text" id="name" class="form-control bg-dark text-light border border-light"
                        placeholder="Enter Title">
                </div>
                <div class="form-group ">
                    <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn gc_btn">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Task Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel2">Add Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" form-group mb-3">
                    <label for="name" class=" mb-2">Task <span class="text-danger ms-1">*</span></label>
                    <input type="text" id="name" class="form-control bg-dark text-light border border-light"
                        placeholder="Enter Task">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn gc_btn">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Due Modal -->
<div class="modal fade" id="staticBackdropCal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel2">Edit Due</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class=" form-group mb-3">
                    <label for="name" class=" mb-2">Edit Due Date <span class="text-danger ms-1">*</span></label>
                    <div class="ui calendar " id="example1">
                        <div class="ui input left icon w-100">
                            <i class="fa-solid fa-calendar-days p-3 d-flex align-items-center bg-light"></i>
                            <input class="form-control mb-0" type="text" placeholder="Date/Time">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn gc_btn">Submit</button>
            </div>
        </div>
    </div>
</div>

<script>
        $(".chosen-select").chosen({
            no_results_text: "Oops, nothing found!"
        })
    </script>
<script>
function addTask() {
  var x = document.getElementById("myTask");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

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