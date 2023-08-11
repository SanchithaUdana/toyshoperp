<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Customer Details</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="mb-3">
      <button class="btn btn-success add-btn" data-toggle="modal" data-target="#addCustomerModal">Add</button>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Customer ID</th>
                    <th>Customer Name</th>
                    <th>Contact Person</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $table = "customers";
                  $result = viewAll($con, $table);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td>
                          <?php echo $row['CustomerID']; ?>
                        </td>
                        <td>
                          <?php echo $row['CustomerName']; ?>
                        </td>
                        <td>
                          <?php echo $row['ContactPerson']; ?>
                        </td>
                        <td>
                          <?php echo $row['Email']; ?>
                        </td>
                        <td>
                          <?php echo $row['Phone']; ?>
                        </td>
                        <td>
                          <?php echo $row['Address']; ?>
                        </td>
                        <td>
                          <a href="edit-customer.php?CustomerID=<?php echo $row['CustomerID']; ?>"><button class="btn btn-primary btn-sm edit-btn">Edit</button></a>
                          <button class="btn btn-danger btn-sm delete-btn" data-id="SUP001">Delete</button>
                        </td>
                      </tr>
                  <?php }
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>

  <!-- Add Customer Modal -->
  <div class="modal fade" id="addCustomerModal" tabindex="-1" role="dialog" aria-labelledby="addCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCustomerModalLabel">Add New Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form method="post" action="../includes/customer-add.inc.php">
          <div class="modal-body">
            <!-- Add customer form fields -->
            <div class="form-group">
              <label for="addCustomerName">Customer Name</label>
              <input type="text" class="form-control" id="addCustomerName" name="addCustomerName">
            </div>
            <div class="form-group">
              <label for="addContactPerson">Contact Person</label>
              <input type="text" class="form-control" id="addContactPerson" name="addContactPerson">
            </div>
            <div class="form-group">
              <label for="addEmail">Email</label>
              <input type="email" class="form-control" id="addEmail" name="addEmail">
            </div>
            <div class="form-group">
              <label for="addPhone">Phone</label>
              <input type="tel" class="form-control" id="addPhone" name="addPhone">
            </div>
            <div class="form-group">
              <label for="addAddress">Address</label>
              <input type="text" class="form-control" id="addAddress" name="addAddress">
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" name="addCus">Save</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </form>

      </div>
    </div>
  </div>

  <!-- Edit Customer Modal -->
  <div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-labelledby="editCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editCustomerModalLabel">Edit Customer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Edit customer form fields -->
          <form>
            <div class="form-group">
              <label for="editCustomerID">Customer ID</label>
              <input type="text" class="form-control" id="editCustomerID" disabled>
            </div>
            <div class="form-group">
              <label for="editCustomerName">Customer Name</label>
              <input type="text" class="form-control" id="editCustomerName">
            </div>
            <div class="form-group">
              <label for="editContactPerson">Contact Person</label>
              <input type="text" class="form-control" id="editContactPerson">
            </div>
            <div class="form-group">
              <label for="editEmail">Email</label>
              <input type="email" class="form-control" id="editEmail">
            </div>
            <div class="form-group">
              <label for="editPhone">Phone</label>
              <input type="tel" class="form-control" id="editPhone">
            </div>
            <div class="form-group">
              <label for="editAddress">Address</label>
              <input type="text" class="form-control" id="editAddress">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Customer Confirmation Modal -->
  <div class="modal fade" id="deleteCustomerModal" tabindex="-1" role="dialog" aria-labelledby="deleteCustomerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteCustomerModalLabel">Confirm Deletion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this customer?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger">Delete</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- JavaScript -->
<script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
<script src="js/bootstrap.min.js"></script> <!-- Replace with your Bootstrap file -->
<script>
  // Add Button Click Event
  $('.add-btn').click(function() {
    // Clear the add customer form fields
    $('#addCustomerModal').find('form')[0].reset();

    // Show the add customer modal
    $('#addCustomerModal').modal('show');
  });

  // Edit Button Click Event
  $('.edit-btn').click(function() {
    var customerID = $(this).data('id');
    // Populate the edit form with customer details using AJAX or JavaScript logic

    // Show the edit customer modal
    $('#editCustomerModal').modal('show');
  });

  // Delete Button Click Event
  $('.delete-btn').click(function() {
    var customerID = $(this).data('id');
    // Set the customer ID to be deleted in the confirmation modal using AJAX or JavaScript logic

    // Show the delete customer confirmation modal
    $('#deleteCustomerModal').modal('show');
  });
</script>