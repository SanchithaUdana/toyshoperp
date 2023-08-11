<?php include_once('header.php'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Employees Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button id="addEmployeeBtn" class="btn btn-success" data-toggle="modal" data-target="#addEmployeeModal">Add</button>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Employee ID</th>
                                        <th>Employee Name</th>
                                        <th>Position</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "employees";
                                    $result = viewAll($con, $table);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['EmployeeID']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['EmployeeName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Position']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Email']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Phone']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['Address']; ?>
                                                </td>
                                                <td>
                                                    <a href="edit-employee.php?EmployeeID=<?php echo $row['EmployeeID']; ?>"><button class="btn btn-primary btn-sm edit-btn">Edit</button></a>
                                                    <button class="btn btn-danger btn-sm delete-btn" data-id="EMP0002">Delete</button>
                                                </td>
                                            </tr>
                                    <?php }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>

    <!-- Add Employee Modal -->
    <div class="modal fade" id="addEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="addEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addEmployeeModalLabel">Add New Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="../includes/employee-add.inc.php">
                    <div class="modal-body">
                        <!-- Add employee form fields -->
                        <div class="form-group">
                            <label for="addEmployeeName">Employee Name</label>
                            <input type="text" class="form-control" id="addEmployeeName" name="addEmployeeName">
                        </div>
                        <div class="form-group">
                            <label for="addPosition">Position</label>
                            <input type="text" class="form-control" id="addPosition" name="addPosition">
                        </div>
                        <div class="form-group">
                            <label for="addEmail">Email</label>
                            <input type="email" class="form-control" id="addEmail" name="addEmail">
                        </div>
                        <div class="form-group">
                            <label for="addPhone">Phone</label>
                            <input type="tel" class="form-control" id="addPhone" name="addPhone">
                        </div>
                        <div class="form-group">
                            <label for="addAddress">Address</label>
                            <input type="text" class="form-control" id="addAddress" name="addAddress">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Edit Employee Modal -->
    <div class="modal fade" id="editEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editEmployeeModalLabel">Edit Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="../includes/empoyee-edit.inc.php">
                    <div class="modal-body">
                        <!-- Edit employee form fields -->
                        <form>
                            <div class="form-group">
                                <label for="editEmployeeID">Employee ID</label>
                                <input type="text" class="form-control" id="editEmployeeID" disabled>
                            </div>
                            <div class="form-group">
                                <label for="editEmployeeName">Employee Name</label>
                                <input type="text" class="form-control" id="editEmployeeName">
                            </div>
                            <div class="form-group">
                                <label for="editPosition">Position</label>
                                <input type="text" class="form-control" id="editPosition">
                            </div>
                            <div class="form-group">
                                <label for="editEmail">Email</label>
                                <input type="email" class="form-control" id="editEmail">
                            </div>
                            <div class="form-group">
                                <label for="editPhone">Phone</label>
                                <input type="tel" class="form-control" id="editPhone">
                            </div>
                            <div class="form-group">
                                <label for="editAddress">Address</label>
                                <input type="text" class="form-control" id="editAddress">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save Changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>

    <!-- Delete Employee Confirmation Modal -->
    <div class="modal fade" id="deleteEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="deleteEmployeeModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteEmployeeModalLabel">Delete Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this employee?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Delete</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script> <!-- Replace with your jQuery file -->
    <script src="js/bootstrap.min.js"></script> <!-- Replace with your Bootstrap file -->
    <script>
        // Edit Button Click Event
        $('.edit-btn').click(function() {
            var employeeID = $(this).data('id');
            // Populate the edit form with supplier details using AJAX or JavaScript logic

            // Show the edit supplier modal
            $('#editEmployeeModal').modal('show');
        });

        // Delete Button Click Event
        $('.delete-btn').click(function() {
            var supplierID = $(this).data('id');
            // Set the supplier ID to be deleted in the confirmation modal using AJAX or JavaScript logic

            // Show the delete supplier confirmation modal
            $('#deleteEmployeeModal').modal('show');
        });

        // Add Button Click Event
        $('#addEmployeeBtn').click(function() {
            // Clear the form fields
            $('#employeeID').val('');
            $('#employeeName').val('');
            $('#position').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#address').val('');

            // Show the add supplier modal
            $('#addEmployeeModal').modal('show');
        });
    </script>
</div>

<?php include_once('footer.php'); ?>