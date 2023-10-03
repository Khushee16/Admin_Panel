<?php include("../partials/header.php") ?>

    <div class="gc_row px-md-4 px-2">
        <div class="card mt-md-3 mb-3">
            <div class="card-body d-flex align-items-center p-lg-3 p-2 staff_header">
                <div class="pe-4 fs-5">Add Product</div>
                <div class="ms-auto">
                    <a href="./product.php" class="btn gc_btn">Go Back</a>
                </div>
            </div>
        </div>
        <div class="card  mb-md-0 mb-3">
            <div class="card-body">
                <form class="row g-3">
                    <div class="col-md-6 form-floating">
                        <input type="text" id="name" class="form-control form-control-lg"  placeholder="">
                        <label for="name" class="form-label">User Name</label>
                    </div>
                    <div class="col-md-6 form-floating">
                            <input type="text" id="Barcode" class="form-control form-control-lg"  placeholder="">
                            <label for="barcode" class="form-label">Tag / Barcode</label>
                    </div>
                    <div class="col-md-6">
                        <div class="input-group">
                            <select name="Category" id="" class="form-control select">
                                <option value="0">Select Category</option>
                                <option value="1">Category 1</option>
                                <option value="2">Category 2</option>
                                <option value="3">Category 2</option>
                            </select>
                            <button type="button" class="btn gc_btn px-3" data-bs-toggle="modal" data-bs-target="#exampleModal"> + </button>
                        </div>
                    </div>
                    <div class="col-md-6 form-floating">
                        <input type="number" class="form-control form-control-lg" id="price"  placeholder=""/>
                        <label for="price" class="form-label">Product Price</label>
                    </div>
                    
                    <div class="col-sm-10 form-floating">
                        <input type="file" class="form-control py-3 px-4" name="image" id="Image" />
                        <label htmlFor="Image"  class="form-label">Image </label>
                    </div>
                    <div class="col-sm-2 d-none d-sm-block">
                        <img src="<?php echo $url; ?>/Assets/Images/upload.png" id="product_image" class="product_preview upload" height="80px" alt=""/>
                        <input type="hidden" name="hidden_image" id="product_hidden_image" />
                    </div>
                    <div class="col-12 form-floating">
                        <textarea  class="form-control" id="Desc" name="Desc"   placeholder="" ></textarea>
                        <label for="desc" class="form-label">Product Description </label>
                    </div>
                    <div class="col-12 form-floating">
                        <input type="hidden" name="user_id"/>
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
        <div class=" form-group ">
            <label for="name" class="text-dark mb-2"> New Category Name</label>
            <input type="text" id="name" class="form-control text-dark"   placeholder="" >
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn gc_btn">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include("../partials/footer.php") ?>