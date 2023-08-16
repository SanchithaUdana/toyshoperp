<!DOCTYPE html>
<html lang="en">

<head>


    <!-- sweetalert 2 CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    </script>

    <!-- form empty checker -->
    <script defer>
        function validateForm() {
            var x = document.forms["logform"]["username"].value;
            var y = document.forms["logform"]["password"].value;

            // var currentURL = window.location.href;
            // // Create a URL object from the current URL
            // var url = new URL(currentURL);
            // // Get the URLSearchParams object from the URL
            // var searchParams = url.searchParams;
            // // Get the value of the 'error' parameter
            // var errorValue = searchParams.get("error");

            if (x == "" && y == "") {
                Swal.fire({
                    icon: 'question',
                    title: 'Enter Username and password',
                    text: 'Empty Login Details',
                    position: 'center',
                    padding: '30px',
                    allowEnterKey: true,
                    allowOutsideClick: false,

                })
                return false;
            } else if (x == "") {
                Swal.fire({
                    icon: 'question',
                    title: 'Enter Username',
                    text: 'Empty Login Details',
                    position: 'center',
                    padding: '30px',
                    allowEnterKey: true,
                    allowOutsideClick: false,
                })
                return false;
            } else if (y == "") {
                Swal.fire({
                    icon: 'question',
                    title: 'Enter password',
                    text: 'Empty Login Details',
                    position: 'center',
                    padding: '30px',
                    allowEnterKey: true,
                    allowOutsideClick: false,
                })
                return false;
            }
        }
    </script>

    <!-- prevent back keyword -->
    <script defer type="text/javascript">
        function preventBack() {
            window.history.forward()
        };
        setTimeout("preventBack()", 0);
        window.onunload = function() {
            null;
        }
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
        .swal2-container {
            padding: 0.4em;
        }

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
            max-width: 40px;
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
                            <h2 class="font-weight-bold text-center">Login</h2>
                            <h6 class="font-weight-normal mb-0 text-center" id="displayer">Please enter your credentials to proceed.
                            </h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <form class="forms-sample" name="logform" action="./includes/login.php" method="post" autocomplete="off">
                                <div class="form-group">
                                    <label for="type">Type</label>
                                    <select class="form-control" id="type" name="type">
                                        <option value="supervisor">Supervisor</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                </div>

                                <button type="submit" onclick="return validateForm()" class="btn btn-primary mr-2">Login</button>
                                <!-- <button type="button" class="btn btn-light">Cancel</button> -->
                                <!-- <a href="public/dashboard.php">Next</a> -->
                            </form>
                            <!-- <div class="mt-3 text-center">
                                <a href="forgot-password.php">Forgot Password?</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->


</body>


</html>