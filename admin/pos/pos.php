<?php include("../partials/header.php") ?>
<div class="gc_row px-md-4 px-2">
    <div class="card mt-md-3 mb-3">
        <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
            <div class="pe-4 fs-5">POS </div>
            <!-- <div class="ms-auto">
                    <a href="../" class="btn gc_btn">Go Back</a>
                </div> -->
        </div>
    </div>
    <div class="gc_bottom_btn fixed-bottom customer" data-bs-toggle="modal" data-bs-target="#exampleModal"> <button
            class="btn gc_btn d-flex align-items-center d-block d-lg-none"><span class="fs-4 me-2">+</span>Add
            Product</button></div>
    <div class="gc_card ">
        <div class="row">
            <div class="col-lg-7  mb-5">
                <div class="card">
                    <div class=" p-3">
                        <form class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div class="">
                                        <label for="">Bill No.</label>
                                        <input type="text" placeholder="Bill No." disabled class="form-control"
                                            value="P-0025" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="form-label">Customer Name</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Mobile Number</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Email Address</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Alternative Mobile Number</label>
                                        <input type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="">
                                        <label for="">Address</label>
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Birth Date</label>
                                        <input type="date" name="date" class="form-control" id="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="">Anniversary Date</label>
                                        <input type="date" name="date" class="form-control" id="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Select Product</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select form-select-sm" aria-label="Default select example">
                                            <option selected>Select Product</option>
                                            <option value="1">Asc</option>
                                            <option value="2">Desc</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Select Staff</label>
                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                        <option selected>Select Staff</option>
                                        <option value="1">Asc</option>
                                        <option value="2">Desc</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card table-responsive my-3 product-pos p-3">
                    <table class="table rwd-table mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Tax</th>
                                <th>SubTotal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-header="SKU" class="gc_flex">
                                    <input type="text" name="sku" class="form-control" placeholder="Product SKU">
                                </td>
                                <td data-header="Name" class="gc_flex">
                                    <input type="text" name="name" class="form-control" placeholder="Product Name">
                                </td>
                                <td data-header="Type" class="gc_flex">
                                    <input type="text" name="type" class="form-control d-lg-block d-none"
                                        value="Gram Base" readOnly />
                                    <input type="text" name="weight" class="form-control mt-2" placeholder="weight">
                                </td>
                                <td data-header="Tax" class="gc_flex">
                                    <select name="tax" class="form-control ">
                                        <option value="">Select Tax</option>
                                        <option value={9}>9%</option>
                                        <option value={18}>18%</option>
                                    </select>
                                </td>
                                <td data-header="SubTotal" class="gc_flex">
                                    &#8377; 50000
                                </td>
                                <td data-header="Action" class="gc_flex">
                                    <!-- <a class="ms-2 delete-btn" onClick={()=> {
                                            const updatedProducts = [...products];
                                            updatedProducts.splice(index, 1);
                                            setProducts(updatedProducts);
                                            }}
                                            > -->
                                    <img src="<?php echo $url; ?>/assets/Images/delete.png" width="20px" class=""
                                        alt="Delete" />
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card">
                    <div class="p-3">
                        <form class="mb-3 mb-md-0">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label for="">Discount</label>
                                    <input type="text" placeholder="Discount" class="form-control" />
                                </div>
                                <div class="col-md-4">
                                    <label for="">Coupon Code</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="" class="form-control" placeholder="Coupon Code"
                                            id="" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Shipping</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1">&#8377;</span>
                                        <input type="text" class="form-control" value="0" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="d-md-flex g-4 align-items-center p-3">
                        <div class=" p-2">
                            <h4>Grand Total: &#8377; 100000</h4>
                        </div>
                        <div class="ms-auto d-flex">
                            <a href="" type='button' class="btn gc_btn">
                                Submit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 pos-left top-0 d-none d-lg-block">
                <div class="card">
                    <div class="card-body">


                        <div class="px-2 pos_tab">
                            <div class="d-flex flex-wrap justify-content-around">
                                <div class=" gc_btn mb-2">
                                    <a class="active pos_btn btn  " id="all">Show All</a>
                                </div>
                                <div class=" gc_btn mb-2">
                                    <a class="pos_btn btn  " id="First">First</a>
                                </div>
                                <div class=" gc_btn mb-2">
                                    <a class="pos_btn btn  " id="Second">Second</a>
                                </div>
                                <div class=" gc_btn mb-2">
                                    <a class="pos_btn btn  " id="Third">Third</a>
                                </div>
                                <div class=" gc_btn mb-2">
                                    <a class="pos_btn btn  " id="Fifth">Fifth</a>
                                </div>
                            </div>
                            <div id="pos_parent" class="row mt-3">
                                <div class="col-lg-6 mb-3 box First">
                                    <div class="card">
                                        <div class="card-body p-4 text-center pos_box">
                                            <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt=""
                                                class="w-75">
                                            <p class="mb-0 pt-3">Product 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3 box Second">
                                    <div class="card">
                                        <div class="card-body p-4 text-center pos_box">
                                            <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt=""
                                                class="w-75">
                                            <p class="mb-0 pt-3">Product 2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3 box Third">
                                    <div class="card">
                                        <div class="card-body p-4 text-center pos_box">
                                            <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt=""
                                                class="w-75">
                                            <p class="mb-0 pt-3">Product 3</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3 box Fifth">
                                    <div class="card">
                                        <div class="card-body p-4 text-center pos_box">
                                            <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt=""
                                                class="w-75">
                                            <p class="mb-0 pt-3">Product 4</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3 box First Second">
                                    <div class="card">
                                        <div class="card-body p-4 text-center pos_box">
                                            <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt=""
                                                class="w-75">
                                            <p class="mb-0 pt-3">Product 5</p>
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
<!-- Modal -->
<div class="modal pos_modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Select Product</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="px-2 pos_tab">
                    <div class="d-flex flex-wrap justify-content-around">
                        <div class=" gc_btn mb-2">
                            <a class="active pos_btn btn  " id="all">Show All</a>
                        </div>
                        <div class=" gc_btn mb-2">
                            <a class="pos_btn btn  " id="First">First</a>
                        </div>
                        <div class=" gc_btn mb-2">
                            <a class="pos_btn btn  " id="Second">Second</a>
                        </div>
                        <div class=" gc_btn mb-2">
                            <a class="pos_btn btn  " id="Third">Third</a>
                        </div>
                        <div class=" gc_btn mb-2">
                            <a class="pos_btn btn  " id="Fifth">Fifth</a>
                        </div>
                    </div>
                    <div id="pos_parent" class="row mt-3">
                        <div class="col-lg-6 mb-3 box First">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box Second">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box Third">
                            <div class="card">
                                <div class="card-body p-4 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box Fifth">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box First Second">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box First Second">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-3 box First Second">
                            <div class="card">
                                <div class="card-body p-2 py-4 text-center pos_box">
                                    <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" alt="" class="">
                                    <p class="mb-0 pt-3">Product 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php include("../partials/footer.php") ?>