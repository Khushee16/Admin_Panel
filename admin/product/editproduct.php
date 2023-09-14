<?php include("../partials/header.php") ?>

    <div class="gc_row px-4">
        <div class="card mt-3 mb-3">
            <div class="card-body d-flex align-items-center p-3">
                <div class="pe-4 fs-5">Edit Product</div>
                <div class="ms-auto">
                    <a href="./product.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card p-3 ">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6 form-group">
                        <input type="text" id="name" class="form-control form-control-lg" required>
                        <label for="name">User Name</label>
                    </div>
                    <div class="col-md-6 form-group">
                            <input type="text" id="Barcode" class="form-control form-control-lg" required>
                            <label for="barcode">Product Barcode</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input type="number" class="form-control form-control-lg" id="price" required/>
                        <label for="price">Product Price</label>
                    </div>
                    <div class="col-md-6 ">
                        <select name="Category" id="" class="form-control form-control-lg">
                            <option value="0">Select Category</option>
                            <option value="1">Category 1</option>
                            <option value="2">Category 2</option>
                            <option value="3">Category 2</option>
                        </select>
                    </div>
                    <!-- <input type="hidden" name="role" value="2"/> -->
                    <div class="col-md-10 form-group">
                        <input type="file" class="form-control" name="image" id="Image" placeholder=" "/>
                        <label htmlFor="Image" class="form-label">Image </label>
                    </div>
                    <div class="col-md-2 ">
                        <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" id="product_image" class="product_preview barcode" height="80px" alt=""/>
                        <input type="hidden" name="hidden_image" id="product_hidden_image" />
                        <a href="./product.php" class="text-danger delete-image my-auto ms-3">Delete</a>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="number" class="form-label">SGST <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input  class="form-control" id="number" name="number" placeholder="SGST (%)" type="number" />
                        </div>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="number" class="form-label">CGST <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input  class="form-control" id="number" name="number" placeholder="CGST (%)" type="number" />
                        </div>
                    </div>
                    <div class="col-12 form-group">
                        <label for="desc" class="form-label">Product Description <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input  class="form-control" id="Desc" name="Desc" placeholder="Enter Description " type="text" />
                        </div>
                    </div>
                    <div class="col-12 ">
                        <div id="drop-area">
                                    <form class="my-form">
                                        <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
                                        <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                                        <label class="btn gc_btn" for="fileElem">Select some files</label>
                                        <progress id="progress-bar" max=100 value=0></progress>
                                    </form>
                                <div id="gallery" class=""></div>
                        </div>
                    </div>
                    <div class="col-12 form-group">
                        <input type="hidden" name="user_id" />
                        <button type="submit" class="btn gc_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include("../partials/footer.php") ?>