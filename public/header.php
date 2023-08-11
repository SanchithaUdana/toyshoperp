<!DOCTYPE html>
<html lang="en">

<?php
require_once('../includes/db_conn.php');
require_once('../includes/functions.php');
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="dashboard.php"><img src="../images/saru logo.png"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="dashboard.php"><img src="../images/saru logo.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
                            <a href="user-profile.php" class="dropdown-item">
                                <i class="ti-user text-primary"></i>
                                Profile
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>

            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#people" aria-expanded="false"
                            aria-controls="people">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">People</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="people">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="suppliers.php">Suppliers</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="customers.php">Customers</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="employees.php">Employees</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#raw-materials" aria-expanded="false"
                            aria-controls="raw-materials">
                            <i class="icon-pie-graph menu-icon"></i>
                            <span class="menu-title">Raw Materials</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="raw-materials">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="list-raw-materials.php">List Raw
                                        Materials</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="false"
                            aria-controls="products">
                            <i class="icon-bar-graph-2 menu-icon"></i>
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="products">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"><a class="nav-link" href="list-products.php">List
                                        Products</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="list-quotations.php">List
                                        Quotations</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false"
                            aria-controls="sales">
                            <i class="icon-star menu-icon"></i>
                            <span class="menu-title">Sales</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="sales">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="list-sales.php">List Sales</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="add-sales.php">Add Sale</a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#purchase" aria-expanded="false"
                            aria-controls="purchase">
                            <i class="icon-reload menu-icon"></i>
                            <span class="menu-title">Orders</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="purchase">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="orders-list.php"> Orders List
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="pending-orders.php"> Pending
                                        Orders
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="completed-orders.php"> Completed
                                        Orders
                                    </a></li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#transfer" aria-expanded="false"
                            aria-controls="transfer">
                            <i class="icon-fast-forward menu-icon"></i>
                            <span class="menu-title">Transfers</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="transfer">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="list-transfers.php"> List
                                        Transfers
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="deliveries.php">Deliveries</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#return" aria-expanded="false"
                            aria-controls="return">
                            <i class="icon-reply menu-icon"></i>
                            <span class="menu-title">Returns</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="return">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="list-returns.php"> List Returns
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false"
                            aria-controls="report">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Reports</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="report">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="stock-chart.php"> Stock Chart
                                    </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="product-reports.php"> Product
                                        Reports
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="daily-sales.php"> Daily Sales
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#accounts" aria-expanded="false"
                            aria-controls="accounts">
                            <i class="icon-stack-2 menu-icon"></i>
                            <span class="menu-title">Accounts</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="accounts">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="admin-accounts.php"> Admins </a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="supervisor-accounts.php">
                                        Supervisors
                                    </a></li>
                                <li class="nav-item"> <a class="nav-link" href="staff-accounts.php"> Staff </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>