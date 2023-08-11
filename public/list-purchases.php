<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">List Purchases</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Purchase ID</th>
                    <th>Product Name</th>
                    <th>Supplier</th>
                    <th>Quantity</th>
                    <th>Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Toy Car</td>
                    <td>ABC Suppliers</td>
                    <td>10</td>
                    <td>$50</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Doll Set</td>
                    <td>XYZ Suppliers</td>
                    <td>5</td>
                    <td>$30</td>
                  </tr>
                  <!-- Add more purchase rows here -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('footer.php'); ?>
