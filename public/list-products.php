<?php include_once('header.php');?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">List of Products</h3>
            <h6 class="font-weight-normal mb-0">All products are up-to-date. You have <span class="text-primary">3 low stock products!</span></h6>
          </div>
          
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <button class="btn btn-success" id="addProductBtn" data-toggle="modal" data-target="#addProductModal">Add</button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Stock Quantity</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PD001</td>
                    <td>Widget A</td>
                    <td>Category 1</td>
                    <td>$9.99</td>
                    <td>100</td>
                    <td>
                      <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#editProductModal">Edit</button>
                      <button class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>PD002</td>
                    <td>Widget B</td>
                    <td>Category 2</td>
                    <td>$19.99</td>
                    <td>50</td>
                    <td>
                      <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#editProductModal">Edit</button>
                      <button class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>PD003</td>
                    <td>Widget C</td>
                    <td>Category 1</td>
                    <td>$14.99</td>
                    <td>75</td>
                    <td>
                      <button class="btn btn-primary btn-sm edit-btn" data-toggle="modal" data-target="#editProductModal">Edit</button>
                      <button class="btn btn-danger btn-sm delete-btn" data-toggle="modal" data-target="#deleteConfirmationModal">Delete</button>
                    </td>
                  </tr>
                  <!-- Add more rows for other products -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  <!-- Add Product Modal -->
  <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addProductModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="addProductName">Product Name</label>
              <input type="text" class="form-control" id="addProductName">
            </div>
            <div class="form-group">
              <label for="addCategory">Category</label>
              <input type="text" class="form-control" id="addCategory">
            </div>
            <div class="form-group">
              <label for="addPrice">Price</label>
              <input type="text" class="form-control" id="addPrice">
            </div>
            <div class="form-group">
              <label for="addStockQuantity">Stock Quantity</label>
              <input type="text" class="form-control" id="addStockQuantity">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Product Modal -->
  <div class="modal fade" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
          <div class="form-group">
              <label for="editProductID">Product ID</label>
              <input type="text" class="form-control" id="editProductID" disabled>
            </div>
            <div class="form-group">
              <label for="editProductName">Product Name</label>
              <input type="text" class="form-control" id="editProductName">
            </div>
            <div class="form-group">
              <label for="editCategory">Category</label>
              <input type="text" class="form-control" id="editCategory">
            </div>
            <div class="form-group">
              <label for="editPrice">Price</label>
              <input type="text" class="form-control" id="editPrice">
            </div>
            <div class="form-group">
              <label for="editStockQuantity">Stock Quantity</label>
              <input type="text" class="form-control" id="editStockQuantity">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this product?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-danger">Yes, Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include_once('footer.php'); ?>

  <script>
    $(document).ready(function() {
      // Add button click event
      $('#addProductModal').on('show.bs.modal', function (event) {
        // Clear the input fields
        $(this).find('input').val('');
      });
    });
  </script>
