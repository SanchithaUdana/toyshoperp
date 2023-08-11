<?php include_once('header.php'); ?>

<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">User Profile</h3>
            <h6 class="font-weight-normal mb-0">Edit your profile information</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="text-center mb-4">
              <img src="images/saru logo.png" alt="Profile Image" width="150" height="150" class="rounded-circle">
            </div>
            <table class="table table-hover">
              <tbody>
                <tr>
                  <td>ID</td>
                  <td>123456789</td>
                </tr>
                <tr>
                  <td>Name</td>
                  <td>John Doe</td>
                </tr>
                <tr>
                  <td>Username</td>
                  <td>johndoe</td>
                </tr>
                <tr>
                  <td>Phone</td>
                  <td>0712345678</td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>johndoe@gmail.com</td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>Male</td>
                </tr>
                <tr>
                  <td>Type</td>
                  <td>Supervisor</td>
                </tr>
                <!-- Add more rows for other fields -->
              </tbody>
            </table>
            <div class="text-center mt-4">
              <button class="btn btn-primary btn-sm btn-edit" data-toggle="modal" data-target="#editModal">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Edit User Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Add your form elements here for editing user details -->
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
            </div>
            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" id="gender" name="gender">
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
            </div>
            <div class="form-group">
              <label for="type">Type</label>
              <select class="form-control" id="type" name="type">
                <option value="supervisor">Supervisor</option>
                <option value="staff">Staff</option>
              </select>
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
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
  <!-- Edit Modal ends -->

<!-- Footer -->
<?php include_once('footer.php'); ?>
