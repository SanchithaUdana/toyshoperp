<?php include_once('header.php');?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Deliveries</h3>
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
                    <th>Delivery ID</th>
                    <th>Transfer ID</th>
                    <th>Customer</th>
                    <th>Delivery Date</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>D001</td>
                    <td>TRF001</td>
                    <td>John Doe</td>
                    <td>2023-06-15</td>
                    <td><span class="btn btn-success btn-sm">Delivered</span></td>
                  </tr>
                  <tr>
                    <td>D002</td>
                    <td>TRF002</td>
                    <td>Jane Smith</td>
                    <td>2023-06-18</td>
                    <td><span class="btn btn-warning btn-sm">Pending</span></td>
                  </tr>
                  <tr>
                    <td>D003</td>
                    <td>TRF003</td>
                    <td>Mike Johnson</td>
                    <td>2023-06-20</td>
                    <td><span class="btn btn-success btn-sm">Delivered</span></td>
                  </tr>
                  <!-- Add more rows for other deliveries -->
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
