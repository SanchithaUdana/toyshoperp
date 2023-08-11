<?php include_once('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Pending Orders</h3>
            <h6 class="font-weight-normal mb-0">You have <span class="text-primary">3 pending orders!</span></h6>
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
                    <th>Date to be completed</th>
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
                    <td><span class="badge badge-warning">Pending</span></td>
                    <td>
                      <button class="btn btn-primary btn-sm">Complete</button>
                      <button class="btn btn-danger btn-sm cancel-btn" data-id="ORD001">Cancel</button>
                    </td>
                  </tr>
                  <!-- Add more rows for other pending orders -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

<!-- Cancel Confirmation Modal -->
<div class="modal fade" id="cancelConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="cancelConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cancelConfirmationModalLabel">Cancel Order Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to cancel this order?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-danger confirm-cancel-btn">Yes, Cancel</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include_once('footer.php'); ?>

<script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
<script src="js/bootstrap.min.js"></script> <!-- Replace with your Bootstrap file -->
<script>
  // Cancel Button Click Event
  $('.cancel-btn').click(function() {
    var orderID = $(this).data('id');
    // Show the cancel confirmation modal
    $('#cancelConfirmationModal').modal('show');

    // Store the order ID in a hidden input field inside the modal
    $('#cancelConfirmationModal').find('input[name="orderID"]').val(orderID);
  });

  // Confirm Cancel Button Click Event
  $('.confirm-cancel-btn').click(function() {
    // Get the order ID from the hidden input field inside the modal
    var orderID = $('#cancelConfirmationModal').find('input[name="orderID"]').val();

    // Perform the cancel logic for the order with the specified ID
    alert('Canceling order ID: ' + orderID);

    // Close the cancel confirmation modal
    $('#cancelConfirmationModal').modal('hide');
  });
</script>
</body>
</html>
