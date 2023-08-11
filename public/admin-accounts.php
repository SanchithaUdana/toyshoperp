<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Accounts</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    html,
    body {
      height: 100%;
    }

    .main-panel {
      min-height: 100%;
      display: flex;
      flex-direction: column;
    }

    .content-wrapper {
      flex: 1;
      padding: 20px; /* Add padding for content */
    }

    .footer {
      margin-top: auto;
      padding: 20px; /* Add padding for footer */
    }

    .table-responsive {
      overflow-x: auto; /* Enable horizontal scroll for the table */
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
          <h3 class="font-weight-bold">Admin Accounts</h3>
        </div>
      </div>
      </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-12">
          <button class="btn btn-success" data-toggle="modal" data-target="#addAdminModal">Add</button>
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
                  <th>ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Type</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>John Doe</td>
                  <td>johndoe</td>
                  <td>Admin</td>
                  <td>0784457867</td>
                  <td>Colombo</td>
                  <td>
                    <button class="btn btn-success btn-sm">Active</button>
                  </td>
                  <td>
                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editAdminModal">Edit</button>
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteAdminModal">Delete</button>
                  </td>
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
   

  <!-- Add Admin Modal -->
  <div class="modal fade" id="addAdminModal" tabindex="-1" role="dialog" aria-labelledby="addAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addAdminModalLabel">Add Admin Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add admin account form here -->
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" placeholder="Enter Username">
            </div>
            
            </div>
            <div class="form-group">
              <label for="status">Status</label>
              <select class="form-control" id="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
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
  <!-- End Add Admin Modal -->

  <!-- Edit Admin Modal -->
  <div class="modal fade" id="editAdminModal" tabindex="-1" role="dialog" aria-labelledby="editAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editAdminModalLabel">Edit Admin Account</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Edit admin account form here -->
          <form>
            <div class="form-group">
              <label for="editName">Name</label>
              <input type="text" class="form-control" id="editName" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="editUsername">Username</label>
              <input type="text" class="form-control" id="editUsername" placeholder="Enter Username">
            </div>
           
            <div class="form-group">
              <label for="editStatus">Status</label>
              <select class="form-control" id="editStatus">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
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
  <!-- End Edit Admin Modal -->

  <!-- Delete Admin Confirmation Modal -->
  <div class="modal fade" id="deleteAdminModal" tabindex="-1" role="dialog" aria-labelledby="deleteAdminModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteAdminModalLabel">Confirm Deletion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this admin account?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger">Delete</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Delete Admin Confirmation Modal -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
