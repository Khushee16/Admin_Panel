<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Edit Product</div>
                <div class="ms-auto">
                    <a href="./product.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card mb-md-0 mb-3">
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
                    <div class="col-md-6">
                        <div class="input-group">
                            <select name="Category" id="" class="form-control form-control-lg">
                                <option value="0">Select Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                <option value="3">Category 2</option>
                            </select>
                            <button type="button" class="btn btn-primary px-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> + </button>
                        </div>
                    </div>
                    <div class="col-sm-8 form-group">
                        <input type="file" class="form-control" name="image" id="Image" />
                        <label htmlFor="Image" class="form-label">Image </label>
                    </div>
                    <div class="col-sm-4 d-flex">
                        <img src="<?php echo $url; ?>/assets/Images/cleanser.jpg" id="product_image" class="product_preview barcode" height="80px" alt=""/>
                        <!-- <input type="hidden" name="hidden_image" id="product_hidden_image" /> -->
                        <a href="./product.php" class="text-danger delete-image my-auto ms-3">Delete</a>
                    </div>
                    <div class="col-md-6 form-group">
                        <input  class="form-control form-control-lg" id="SGST" name="SGST"  type="number" required />
                        <label for="SGST" class="form-label">Enter SGST</label>
                    </div>
                    <div class="col-md-6 form-group">
                        <input  class="form-control form-control-lg" id="CGST" name="CGST"  type="number" required />
                        <label for="CGST" class="form-label">Enter CGST</label>
                    </div>
                    <div class="col-12 form-group">
                        <textarea  class="form-control" id="Desc" name="Desc" required></textarea>
                        <label for="desc" class="form-label">Product Description </label>
                    </div>
                    <div class="col-12 ">
                        <div id="drop-area">
                                    <form class="my-form">
                                        <p>Upload multiple files with the file dialog or by dragging and dropping images onto the dashed region</p>
                                        <input type="file" id="fileElem" multiple accept="image/*" onchange="handleFiles(this.files)">
                                        <label class="btn gc_btn" for="fileElem">Select some files</label>
                                        <!-- <progress id="progress-bar" max=100 value=0></progress> -->
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
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-dark" id="exampleModalLabel">Enter New Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class=" form-group">
            <input type="text" id="name" class="form-control form-control-lg" required>
            <label for="name"> New Category Name</label>
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