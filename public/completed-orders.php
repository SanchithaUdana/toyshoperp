<?php include_once('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Completed Orders</h3>
            <h6 class="font-weight-normal mb-0">You have <span class="text-primary">5 completed orders!</span></h6>
          </div>
        </div>
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
                    <th>Date of completion</th>
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
                  <!-- Add more rows for other completed orders -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

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
