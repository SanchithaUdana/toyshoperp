<?php include_once('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Orders List</h3>
            <!-- <h6 class="font-weight-normal mb-0">You have <span class="text-primary">5 completed orders!</span></h6> -->
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-12">
        <button class="btn btn-success" id="addOrderBtn" data-toggle="modal" data-target="#addOrderModal">Add</button>
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
                    <th>Order ID</th>
                    <th>Customer Name</th>
                    <th>Products</th>
                    <th>Quantity</th>
                    <th>Order Date</th>
                    <th>Date of completion/to be completed</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ORD001</td>
                    <td>John Doe</td>
                    <td>Toy</td>
                    <td>10</td>
                    <td>2023-06-26</td>
                    <td>2023-07-02</td>
                    <td>$150.00</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Pending</button>
                      <button class="btn btn-danger btn-sm delete-btn" data-id="ORD001">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>ORD001</td>
                    <td>John Doe</td>
                    <td>Toy</td>
                    <td>10</td>
                    <td>2023-06-26</td>
                    <td>2023-07-02</td>
                    <td>$150.00</td>
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Complete</button>
                      <button class="btn btn-danger btn-sm cancel-btn" data-id="ORD001">Cancel</button>
                    </td>
                  </tr>
                  <!-- Add more rows for other orders -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

   <!-- Add Order Modal -->
   <div class="modal fade" id="addOrderModal" tabindex="-1" role="dialog" aria-labelledby="addOrderModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addOrderModalLabel">Add Order</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form>
            <div class="form-group">
              <label for="customerName">Customer Name</label>
              <input type="text" class="form-control" id="customerName">
            </div>
            <div class="form-group"> 
              <label for="products">Product ID</label>
              <div class="input-group mb-3">
              <input type="text" class="form-control" id="productId" placeholder="Product ID">
              <input type="text" class="form-control" id="quantity" placeholder="Quantity">
                  <div class="input-group-append">
                  <button class="btn btn-success btn-sm text-right flex" data-id="QTN001">Add</button>
                  </div>
              </div>
            </div>
            <div class="form-group">
            <table class="table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="QTN001">Delete</button>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="QTN001">Edit</button>
                      </td>
                    </tr>
                    <!-- Add more products rows here -->
                  </tbody>
                </table>
            </div>
            <div class="form-group">
              <label for="totalprice">Total Price</label>
              <input type="text" class="form-control" id="totalprice" disabled>
            </div>
            <div class="form-group">
              <label for="date">Order Date</label>
              <input type="text" class="form-control" id="date" disabled>
            </div>
            <div class="form-group">
              <label for="date">Date to be Completed</label>
              <input type="text" class="form-control" id="date" >
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

<!-- Footer -->
<?php include_once('footer.php'); ?>

<!-- Confirmation Modal -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this order?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger" id="deleteOrderBtn">Delete</button>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    // Handle delete button click event
    $('.delete-btn').on('click', function() {
      var orderId = $(this).data('id');

      // Set the orderId in the delete modal
      $('#deleteOrderBtn').attr('data-id', orderId);

      // Show the delete confirmation modal
      $('#deleteConfirmationModal').modal('show');
    });

    // Handle delete order confirmation
    $('#deleteOrderBtn').on('click', function() {
      var orderId = $(this).attr('data-id');

      // Send the request to delete the order
      $.ajax({
        url: 'delete_order.php',
        method: 'POST',
        data: { orderId: orderId },
        success: function(response) {
          // Handle success response
          // Reload or update the order list
        },
        error: function(xhr, status, error) {
          // Handle error response
        }
      });

      // Close the confirmation modal
      $('#deleteConfirmationModal').modal('hide');
    });
  });
</script>
