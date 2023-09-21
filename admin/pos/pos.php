<?php include("../partials/header.php") ?>
<div class=' '>
    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-sm-3 p-2 staff_header">
                <div class="pe-4 fs-5">POS </div>
                <!-- <div class="ms-auto">
                    <a href="../" class="btn gc_btn">Go Back</a>
                </div> -->
            </div>
        </div>
        <div class="houmanity-card p-0">
            <div class="row">
                <div class="col-md-7 ">
                    <div class="houmanity-card">
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
                                                <label for="">Customer Name</label>
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
                                                <select class="form-select form-select-sm"
                                                    aria-label="Default select example">
                                                    <option selected>Select Product</option>
                                                    <option value="1">Asc</option>
                                                    <option value="2">Desc</option>
                                                </select>
                                                <span class="input-group-text" id="basic-addon1"><img src={Barcode}
                                                        width="20px" alt="" /></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="">Select Staff</label>
                                            <select class="form-select form-select-sm"
                                                aria-label="Default select example">
                                                <option selected>Select Staff</option>
                                                <option value="1">Asc</option>
                                                <option value="2">Desc</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="houmanity-card">
                        <div class="card table-responsive my-3 product-pos p-3">
                            <table class="table rwd-table mt-3" style={{ width: '100%' }}>
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
                                        <td>
                                            <input type="text" name="sku" class="form-control"
                                                placeholder="Product SKU">
                                        </td>
                                        <td>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Product Name">
                                        </td>
                                        <td>
                                            <input type="text" name="type" class="form-control" value="Gram Base"
                                                readOnly />
                                            <input type="text" name="weight" class="form-control mt-2"
                                                placeholder="weight">
                                        </td>
                                        <td>
                                            <select name="tax" class="form-control ">
                                                <option value="">Select Tax</option>
                                                <option value={9}>9%</option>
                                                <option value={18}>18%</option>
                                            </select>
                                        </td>
                                        <td>
                                            &#8377; 50000
                                        </td>
                                        <td>
                                            <!-- <a class="ms-2 delete-btn" onClick={()=> {
                                            const updatedProducts = [...products];
                                            updatedProducts.splice(index, 1);
                                            setProducts(updatedProducts);
                                            }}
                                            > -->
                                            <img src="<?php echo $url; ?>/assets/Images/delete.png" width="20px"
                                                class="" alt="Delete" />
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="houmanity-card">
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
                                                <input type="text" name="" class="form-control"
                                                    placeholder="Coupon Code" id="" />
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
                    </div>
                    <div class="houmanity-card">
                        <div class="card">
                            <div class="d-md-flex gap-4 align-items-center p-3">
                                <div class=" p-2">
                                    <h4>Grand Total: &#8377; 100000</h4>
                                </div>
                                <div class="ms-auto d-flex">
                                    <a href="" type='button' onClick={handleClick1} class="btn gc_btn">
                                        Submit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 pos-left top-0">
                    <div>
                        <a class="active pos_btn btn gc_btn" id="all">Show All</a>
                        <a class="pos_btn btn gc_btn" id="First">First</a>
                        <a class="pos_btn btn gc_btn" id="Second">Second</a>
                        <a class="pos_btn btn gc_btn" id="Third">Third</a>
                        <a class="pos_btn btn gc_btn" id="Fifth">Fifth</a>

                        <div class="spacer"></div>

                        <div id="pos_parent">
                            <div class="box a b">A &amp; B</div>
                            <div class="box a">A</div>
                            <div class="box b">B</div>
                            <div class="box c">C</div>
                            <div class="box d">D</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../partials/footer.php") ?>