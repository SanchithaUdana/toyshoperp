<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Daily Sales</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-filter">Filter by Date</label>
                  <input type="date" class="form-control" id="date-filter">
                </div>
              </div>
            </div>

            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Customer</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ORD001</td>
                    <td>Product A</td>
                    <td>5</td>
                    <td>$10.00</td>
                    <td>Customer X</td>
                    <td>2023-06-27</td>
                  </tr>
                  <tr>
                    <td>ORD002</td>
                    <td>Product B</td>
                    <td>3</td>
                    <td>$15.00</td>
                    <td>Customer Y</td>
                    <td>2023-06-27</td>
                  </tr>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>
