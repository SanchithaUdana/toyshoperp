<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Transfers</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-12">
              <button class="btn btn-success" data-toggle="modal" data-target="#addTransferModal">Add</button>
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
                    <th>Transfer ID</th>
                    <th>Order ID</th>
                    <th>From Location</th>
                    <th>To Location</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>TRF001</td>
                    <td>ORD001</td>
                    <td>Location X</td>
                    <td>Location Y</td>
                    <td>2023-06-27</td>
                  </tr>
                  <tr>
                    <td>TRF002</td>
                    <td>ORD002</td>
                    <td>Location Y</td>
                    <td>Location Z</td>
                    <td>2023-06-28</td>
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

  <!-- Add Transfer Modal -->
  <div class="modal fade" id="addTransferModal" tabindex="-1" role="dialog" aria-labelledby="addTransferModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addTransferModalLabel">Add Transfer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add transfer form here -->
          <form>
            <div class="form-group">
              <label for="transferId">Transfer ID</label>
              <input type="text" class="form-control" id="transferId" placeholder="Enter Transfer ID" disabled>
            </div>
            <div class="form-group">
              <label for="orderId">Order ID</label>
              <input type="text" class="form-control" id="orderId" placeholder="Enter Order ID">
            </div>
            <div class="form-group">
              <label for="fromLocation">From Location</label>
              <input type="text" class="form-control" id="fromLocation" placeholder="Enter From Location">
            </div>
            <div class="form-group">
              <label for="toLocation">To Location</label>
              <input type="text" class="form-control" id="toLocation" placeholder="Enter To Location">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" id="date">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Transfer Modal -->

  <?php include_once('footer.php'); ?>
