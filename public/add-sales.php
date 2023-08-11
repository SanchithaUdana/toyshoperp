<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Add Sales</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample">
              <div class="form-group">
                <label for="customer-name">Customer Name</label>
                <input type="text" class="form-control" id="customer-name" placeholder="Enter customer name">
              </div>
              
              <div class="products-container">
                <div class="product-item">
                <div class="form-group">
                    <label for="product-id">Product ID</label>
                    <input type="text" class="form-control product-id" placeholder="Enter product ID">
                  </div>
                  <div class="form-group">
                    <label for="product-name">Product Name</label>
                    <input type="text" class="form-control product-name" placeholder="Enter product name">
                  </div>
                  <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control quantity" placeholder="Enter quantity">
                  </div>
                  <div class="form-group">
                    <label for="unit-price">Unit Price</label>
                    <input type="number" class="form-control unit-price" placeholder="Enter unit price">
                  </div>
                  <div class="form-group">
                    <label for="total-price">Total Price</label>
                    <input type="number" class="form-control total-price" placeholder="Total price" readonly>
                  </div>
                </div>
              </div>
              
              <button type="button" class="btn btn-warning add-product-btn">Add Product</button>
              
              
              <div class="form-group">
              <br>
                <label for="final-total-price">Final Total Price</label>
                <input type="number" class="form-control final-total-price" placeholder="Final total price" readonly>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>

  <script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
  <script>
    // Add Product Button Click Event
    $('.add-product-btn').click(function() {
      var productItem = `
        <div class="product-item">
        <div class="form-group">
            <label for="product-id">Product ID</label>
            <input type="text" class="form-control product-id" placeholder="Enter product ID">
          </div>
          <div class="form-group">
            <label for="product-name">Product Name</label>
            <input type="text" class="form-control product-name" placeholder="Enter product name">
          </div>
          <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control quantity" placeholder="Enter quantity">
          </div>
          <div class="form-group">
            <label for="unit-price">Unit Price</label>
            <input type="number" class="form-control unit-price" placeholder="Enter unit price">
          </div>
          <div class="form-group">
            <label for="total-price">Total Price</label>
            <input type="number" class="form-control total-price" placeholder="Total price" readonly>
          </div>
        </div>
      `;
      
      $('.products-container').append(productItem);
    });
    
    // Calculate Total Price for Each Product
    $(document).on('input', '.quantity, .unit-price', function() {
      var productItem = $(this).closest('.product-item');
      var quantity = parseFloat(productItem.find('.quantity').val());
      var unitPrice = parseFloat(productItem.find('.unit-price').val());
      var totalPrice = quantity * unitPrice;
      productItem.find('.total-price').val(totalPrice);
    });
    
    // Calculate Final Total Price
    $(document).on('input', '.total-price', function() {
      var finalTotalPrice = 0;
      $('.total-price').each(function() {
        var totalPrice = parseFloat($(this).val());
        if (!isNaN(totalPrice)) {
          finalTotalPrice += totalPrice;
        }
      });
      $('.final-total-price').val(finalTotalPrice);
    });
  </script>
</body>
</html>
