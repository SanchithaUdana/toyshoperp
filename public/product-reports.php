<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Product Reports</h3>
          </div>
        </div>
      </div>
    </div>

          <div class="row mb-3">
        <div class="col-md-12">
          <button class="btn btn-success" data-toggle="modal" data-target="#addRawMaterialModal">Add</button>
        </div>
      </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <!-- Add your product reports content here -->
            <h4>Toy Car</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#editRawMaterialModal">View Other Details</button>
          </div>  

    <div class="modal fade" id="addRawMaterialModal" tabindex="-1" role="dialog" aria-labelledby="addRawMaterialModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addRawMaterialModalLabel">Add Raw Material</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <!-- Add Product Report -->
            <form>
              <div class="form-group">
                <label for="materialName">Product Id</label>
                <input type="text" class="form-control" id="materialName" placeholder="Enter Product ID">
              </div>
              <div class="form-group">
                <label for="stockQuantity">Product Name</label>
                <input type="textArea" class="form-control" id="stockQuantity" placeholder="Enter Product Name">
              </div>
              <div class="form-group">
                <label for="unitPrice">Product Description</label>
                <textarea name="textarea" rows="10" cols="50"></textarea>
              </div>
              <div class="form-group">
                <label for="supplier">Price</label>
                <input type="text" class="form-control" id="supplier" placeholder="Enter Price">
              </div>
              <div class="form-group">
                <label for="supplier">Stock Qty</label>
                <input type="text" class="form-control" id="supplier" placeholder="Enter Stock Quantity">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Add</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>



          <div class="modal fade" id="editRawMaterialModal" tabindex="-1" role="dialog" aria-labelledby="editRawMaterialModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editRawMaterialModalLabel">Product Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Edit raw material form -->
            <form>
              <div class="form-group">
                <label for="editMaterialID">Product ID</label>
                <input type="text" class="form-control" id="editMaterialID" placeholder="Enter material ID" readonly>
              </div>
              <div class="form-group">
                <label for="editMaterialName">Product Price</label>
                <input type="text" class="form-control" id="editMaterialName" placeholder="Enter material name" readonly>
              </div>
              <div class="form-group">
                <label for="editStockQuantity">Stock Quantity</label>
                <input type="text" class="form-control" id="editStockQuantity" placeholder="Enter stock quantity" readonly>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>


        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>
