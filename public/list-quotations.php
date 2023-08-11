<!DOCTYPE html>
<html>
<head>
  <title>Quotations</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"> <!-- Replace with your Bootstrap CSS file -->
  <style>
    .main-panel {
      min-height: 100vh;
    }
  </style>
</head>
<body>

  <?php include_once('header.php'); ?>

  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">Quotations</h3>
            </div>
            
          </div>
        </div>
      </div>

      <div class="row mb-3">
      <div class="col-md-12">
        <button class="btn btn-success" id="addQuotationBtn" data-toggle="modal" data-target="#addQuotationModal">Add</button>
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
                      <th>Quotation ID</th>
                      <th>Customer Name</th>
                      <th>Products</th>
                      <th>Total Quantity</th>
                      <th>Total Price</th>
                      <th>Date</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>QTN001</td>
                      <td>John Doe</td>
                      <td>Toy Car</td>
                      <td>150</td>
                      <td>$1,300</td>
                      <td>2023-06-25</td>
                      <td>
                        <button class="btn btn-primary btn-sm generate-pdf-btn" data-id="QTN001">Generate PDF</button>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="QTN001">Delete</button>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="QTN001">Edit</button>
                      </td>
                    </tr>
                    <!-- Add more product rows here -->
                    <!-- View Total price here -->
                    <tr colspan='11'>
                      <td>Total</td>
                      <td>
                      <td>$1,300</td>
                    </tr>
                    <!-- Add more quotation rows here -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('footer.php'); ?>
  </div>

  <!-- Add Quotation Modal -->
  <div class="modal fade" id="addQuotationModal" tabindex="-1" role="dialog" aria-labelledby="addQuotationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addQuotationModalLabel">Add Quotation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add quotation form fields here -->
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
              <label for="date">Date</label>
              <input type="text" class="form-control" id="date">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="addQuotationBtn">Add</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Quotation Modal -->
  <div class="modal fade" id="editQuotationModal" tabindex="-1" role="dialog" aria-labelledby="editQuotationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editQuotationModalLabel">Edit Quotation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Edit quotation form fields here -->
          <form>
            <div class="form-group">
              <label for="quotationID">Quotation ID</label>
              <input type="text" class="form-control" id="quotationID" disabled>
            </div>
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
                      <td>Toy Car</td>
                      <td>100</td>
                      <td>$1,300</td>
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
              <label for="date">Date</label>
              <input type="text" class="form-control" id="date">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Quotation Confirmation Modal -->
  <div class="modal fade" id="deleteQuotationModal" tabindex="-1" role="dialog" aria-labelledby="deleteQuotationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteQuotationModalLabel">Delete Quotation</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this quotation?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Yes, Delete</button>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
  <script src="js/bootstrap.min.js"></script> <!-- Replace with your Bootstrap file -->
  <script>
    // Generate PDF Button Click Event
    $('.generate-pdf-btn').click(function() {
      var quotationID = $(this).data('id');
      // Generate the PDF for the quotation using AJAX or JavaScript logic
    });

    // Delete Button Click Event
    $('.delete-btn').click(function() {
      var quotationID = $(this).data('id');
      // Set the quotation ID to be deleted in the confirmation modal using AJAX or JavaScript logic
      $('#confirmDeleteBtn').data('id', quotationID);
      // Show the delete quotation confirmation modal
      $('#deleteQuotationModal').modal('show');
    });

    // Confirm Delete Button Click Event
    $('#confirmDeleteBtn').click(function() {
      var quotationID = $(this).data('id');
      // Perform the deletion of the quotation using AJAX or JavaScript logic
      // After successful deletion, you can remove the quotation row from the table
      // Example:
      $(`tr[data-id="${quotationID}"]`).remove();
      // Hide the delete quotation confirmation modal
      $('#deleteQuotationModal').modal('hide');
    });

    // Edit Button Click Event
    $('.edit-btn').click(function() {
      var quotationID = $(this).data('id');
      // Load the quotation data using AJAX or JavaScript logic
      var customerName = $(`tr[data-id="${quotationID}"] .customer-name`).text();
      var products = $(`tr[data-id="${quotationID}"] .products`).data('products');
      var date = $(`tr[data-id="${quotationID}"] .date`).text();

      // Populate the edit quotation modal with the loaded data
      $('#editQuotationModal #quotationID').val(quotationID);
      $('#editQuotationModal #customerName').val(customerName);
      $('#editQuotationModal #products').val(products);
      $('#editQuotationModal #date').val(date);

      // Show the edit quotation modal
      $('#editQuotationModal').modal('show');
    });

    // Add Quotation Button Click Event
    $('#addQuotationBtn').click(function() {
      // Retrieve the entered data from the form
      var customerName = $('#addQuotationModal #customerName').val();
      var products = $('#addQuotationModal #products').val();
      var date = $('#addQuotationModal #date').val();

      // Generate a unique quotation ID (you can modify this logic as needed)
      var quotationID = 'QTN' + Math.floor(Math.random() * 1000);

      // Create a new quotation row with the entered data
      var newRow = `<tr data-id="${quotationID}">
                      <td>${quotationID}</td>
                      <td class="customer-name">${customerName}</td>
                      <td class="products" data-products="${products}">
                        <ul>
                          ${generateProductList(products)}
                        </ul>
                      </td>
                      <td>${calculateTotalQuantity(products)}</td>
                      <td>${calculateTotalPrice(products)}</td>
                      <td class="date">${date}</td>
                      <td>
                        <button class="btn btn-primary btn-sm generate-pdf-btn" data-id="${quotationID}">Generate PDF</button>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="${quotationID}">Delete</button>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="${quotationID}">Edit</button>
                      </td>
                    </tr>`;

      // Append the new quotation row to the table
      $('tbody').append(newRow);

      // Hide the add quotation modal
      $('#addQuotationModal').modal('hide');

      // Clear the form fields for the next entry
      $('#addQuotationModal #customerName').val('');
      $('#addQuotationModal #products').val('');
      $('#addQuotationModal #date').val('');
    });

    // Helper function to generate the product list HTML
    function generateProductList(products) {
      var productList = '';
      var productArray = products.split(',');

      for (var i = 0; i < productArray.length; i++) {
        var product = productArray[i].trim();
        var quantity = extractQuantity(product);

        productList += `<li>${product} (${quantity})</li>`;
      }

      return productList;
    }

    // Helper function to extract the quantity from a product string
    function extractQuantity(product) {
      var quantityMatch = product.match(/\(([^)]+)\)/);
      if (quantityMatch && quantityMatch.length >= 2) {
        return quantityMatch[1];
      }
      return '';
    }

    // Helper function to calculate the total quantity from the products string
    function calculateTotalQuantity(products) {
      var totalQuantity = 0;
      var productArray = products.split(',');

      for (var i = 0; i < productArray.length; i++) {
        var product = productArray[i].trim();
        var quantity = parseInt(extractQuantity(product));

        if (!isNaN(quantity)) {
          totalQuantity += quantity;
        }
      }

      return totalQuantity;
    }

    // Helper function to calculate the total price from the products string
    function calculateTotalPrice(products) {
      var totalPrice = 0;
      var productArray = products.split(',');

      for (var i = 0; i < productArray.length; i++) {
        var product = productArray[i].trim();
        var price = extractPrice(product);

        if (!isNaN(price)) {
          totalPrice += price;
        }
      }

      return formatCurrency(totalPrice);
    }

    // Helper function to extract the price from a product string
    function extractPrice(product) {
      var priceMatch = product.match(/(\d+(\.\d+)?)/);
      if (priceMatch && priceMatch.length >= 2) {
        return parseFloat(priceMatch[0]);
      }
      return NaN;
    }

    // Helper function to format a number as currency
    function formatCurrency(number) {
      return '$' + number.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }
  </script>

</body>
</html>
