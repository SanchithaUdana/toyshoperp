<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin - Forgot Password</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f5f7ff;
      background-size: cover;
      background-repeat: no-repeat;
    }

    .card {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }

    .text-center {
        text-align: center;
      margin-bottom: 20px;
      margin-left: 400px;
      margin-right: auto;
    }
  </style>
</head>

<body>
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h2 class="font-weight-bold text-center">Forgot Password</h2>
              <br>
              <h6 class="font-weight-normal mb-0 text-center">Enter your email address to reset your password.</h6>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <form class="forms-sample">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email address">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Reset Password</button>
                <a href="login.php" class="btn btn-light">Cancel</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
</body>

</html>
