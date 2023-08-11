<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Sales</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Sales ID</th>
                    <th>Customer Name</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $table = "sales";
                  $result = viewAll($con, $table);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td>
                          <?php echo $row['pid']; ?>
                        </td>
                        <td>
                          <?php echo $row['cusName']; ?>
                        </td>
                        <td>
                          <?php echo $row['pname']; ?>
                        </td>
                        <td>
                          <?php echo $row['quantity']; ?>
                        </td>
                        <td>
                          <?php echo $row['totalprize']; ?>
                        </td>
                        <td>
                          <?php echo $row['unitprize']; ?>
                        </td>
                        <td>
                          <form action="../includes/downloadpdf.php">
                            <button class="btn btn-primary btn-sm generate-pdf-btn" name="generatePdf">Generate PDF
                            </button>
                          </form>
                          <form action="../includes/functions.php">
                            <button class="btn btn-warning btn-sm edit-btn">Edit</button>
                          </form>
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

  <!-- Edit Sale Modal -->
  <div class="modal fade" id="editSaleModal" tabindex="-1" role="dialog" aria-labelledby="editSaleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editSaleModalLabel">Edit Sale</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="saleID">Sales ID</label>
              <input type="text" class="form-control" id="saleID" disabled>
            </div>
            <div class="form-group">
              <label for="customerName">Customer Name</label>
              <input type="text" class="form-control" id="customerName">
            </div>
            <div class="form-group">
              <label for="productName">Product</label>
              <input type="text" class="form-control" id="productName">
            </div>
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" id="quantity">
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="price">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="text" class="form-control" id="date">
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Save Changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>

  <script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
  <script src="js/bootstrap.min.js"></script> <!-- Replace with your Bootstrap file -->
  <script>
    // Edit Button Click Event
    $('.edit-btn').click(function() {
      var saleID = $(this).data('id');
      // Load the sale data using AJAX or JavaScript logic

      // Show the edit sale modal
      $('#editSaleModal').modal('show');
    });

    // Generate PDF Button Click Event
    $('.generate-pdf-btn').click(function() {
      var saleID = $(this).data('pid');
      // Generate PDF logic for the sale with the specified ID

    });
  </script>
  </body>

  </html>