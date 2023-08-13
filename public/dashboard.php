<?php include_once('header.php'); ?>
<!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener("mouseenter", Swal.stopTimer);
                toast.addEventListener("mouseleave", Swal.resumeTimer);
            },
        });

        Toast.fire({
            icon: "success",
            title: "Signed in successfully",
        });
    },  );
</script> -->
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <h2 class="font-weight-bold">Welcome to Saru ERP System!</h2>
                        <br>
                        <h6 class="font-weight-normal mb-3">All systems are running smoothly! You have <span class="text-primary">3
                                pending orders!</span></h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people">
                        <img src="../images/bg_login.jpg" alt="toys" class="img-fluid">
                        <div class="weather-info">
                            <div class="d-flex align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 grid-margin">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card card-tale">
                            <div class="card-body">
                                <p class="mb-4">Today's Production</p>
                                <p class="fs-30 mb-2">4,006</p>
                                <p>10.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card card-dark-blue">
                            <div class="card-body">
                                <p class="mb-4">Total Production</p>
                                <p class="fs-30 mb-2">61,344</p>
                                <p>22.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card card-light-blue">
                            <div class="card-body">
                                <p class="mb-4">Number of Orders</p>
                                <p class="fs-30 mb-2">34,040</p>
                                <p>2.00% (30 days)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-light-danger">
                            <div class="card-body">
                                <p class="mb-4">Number of Customers</p>
                                <p class="fs-30 mb-2">47,033</p>
                                <p>0.22% (30 days)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Production Details</p>
                        <p class="font-weight-500">The total number of toys produced within the given time range. It
                            represents the
                            period of active toy manufacturing in the factory.</p>
                        <div class="d-flex flex-wrap">
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Total Production Value</p>
                                <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Total Orders</p>
                                <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
                            </div>
                            <div class="mr-5 mt-3">
                                <p class="text-muted">Active Workers</p>
                                <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
                            </div>
                            <div class="mt-3">
                                <p class="text-muted">Total Toy Models</p>
                                <h3 class="text-primary fs-30 font-weight-medium">34,040</h3>
                            </div>
                        </div>
                        <canvas id="order-chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-title">Sales Report</p>
                            <a href="add-sales.php" class="text-info">Add Sales</a>
                        </div>
                        <p class="font-weight-500">The total number of toy sales within the given time range. It
                            represents the
                            revenue generated from toy sales.</p>
                        <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                        <canvas id="sales-chart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <!-- Footer -->
    <?php include_once('footer.php'); ?>