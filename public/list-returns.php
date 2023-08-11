<?php include_once('header.php'); ?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Returns</h3>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-3">
    <div class="col-md-12">
              <button class="btn btn-success" data-toggle="modal" data-target="#addReturnModal">Add</button>
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
                    <th>Return ID</th>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Reason</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>RET001</td>
                    <td>ORD001</td>
                    <td>Customer X</td>
                    <td>Defective</td>
                    <td>2023-06-27</td>
                  </tr>
                  <tr>
                    <td>RET002</td>
                    <td>ORD001</td>
                    <td>Customer Y</td>
                    <td>Wrong item</td>
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

  <!-- Add Return Modal -->
  <div class="modal fade" id="addReturnModal" tabindex="-1" role="dialog" aria-labelledby="addReturnModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addReturnModalLabel">Add Return</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add return form here -->
          <form>
            <div class="form-group">
              <label for="returnId">Return ID</label>
              <input type="text" class="form-control" id="returnId" placeholder="Enter Return ID" disabled>
            </div>
            <div class="form-group">
              <label for="orderId">Order ID</label>
              <input type="text" class="form-control" id="orderId" placeholder="Enter Order ID">
            </div>
            <div class="form-group">
              <label for="customer">Customer</label>
              <input type="text" class="form-control" id="customer" placeholder="Enter Customer Name">
            </div>
            <div class="form-group">
              <label for="reason">Reason</label>
              <input type="text" class="form-control" id="reason" placeholder="Enter Return Reason">
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
  <!-- End Add Return Modal -->

  <?php include_once('footer.php'); ?>
