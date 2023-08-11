<?php include_once('header.php'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Supplier Details</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-12">
                <button class="btn btn-success" id="addSupplierBtn" data-toggle="modal" data-target="#addSupplierModal">Add</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Supplier ID</th>
                                        <th>Supplier Name</th>
                                        <th>Contact Person</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $table = "suppliers";
                                    $result = viewAll($con, $table);
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $row['SupplierID']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['SupplierName']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['ContactPerson']; ?>
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
                                                    <a href="edit-supplier.php?SupplierID=<?php echo $row['SupplierID']; ?>"><button class="btn btn-primary btn-sm edit-btn" data-id="SUP0001">Edit</button></a>
                                                    <button class="btn btn-danger btn-sm delete-btn" data-id="SUP001">Delete</button>
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

    <!-- Add Supplier Modal -->
    <div class="modal fade" id="addSupplierModal" tabindex="-1" role="dialog" aria-labelledby="addSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSupplierModalLabel">Add New Supplier</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="../includes/supplier-add.inc.php">
                    <div class="modal-body">
                        <!-- Add supplier form fields -->
                        <div class="form-group">
                            <label for="addSupplierName">Supplier Name</label>
                            <input type="text" class="form-control" id="addSupplierName" name="addSupplierName">
                        </div>
                        <div class="form-group">
                            <label for="addContactPerson">Contact Person</label>
                            <input type="text" class="form-control" id="addContactPerson" name="addContactPerson">
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

    <!-- Edit Supplier Modal -->
    <div class="modal fade" id="editSupplierModal" tabindex="-1" role="dialog" aria-labelledby="editSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSupplierModalLabel">Edit Supplier Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Edit supplier form fields -->
                    <form>
                        <div class="form-group">
                            <label for="editSupplierID">Supplier ID</label>
                            <input type="text" class="form-control" id="editSupplierID" disabled>
                        </div>
                        <div class="form-group">
                            <label for="editSupplierName">Supplier Name</label>
                            <input type="text" class="form-control" id="editSupplierName">
                        </div>
                        <div class="form-group">
                            <label for="editContactPerson">Contact Person</label>
                            <input type="text" class="form-control" id="editContactPerson">
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
                    <button type="button" class="btn btn-primary">Save</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Supplier Confirmation Modal -->
    <div class="modal fade" id="deleteSupplierModal" tabindex="-1" role="dialog" aria-labelledby="deleteSupplierModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteSupplierModalLabel">Confirm Deletion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete this supplier?</p>
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
            var supplierID = $(this).data('id');
            // Populate the edit form with supplier details using AJAX or JavaScript logic

            // Show the edit supplier modal
            $('#editSupplierModal').modal('show');
        });

        // Delete Button Click Event
        $('.delete-btn').click(function() {
            var supplierID = $(this).data('id');
            // Set the supplier ID to be deleted in the confirmation modal using AJAX or JavaScript logic

            // Show the delete supplier confirmation modal
            $('#deleteSupplierModal').modal('show');
        });

        // Add Button Click Event
        $('#addSupplierBtn').click(function() {
            // Clear the form fields
            $('#supplierID').val('');
            $('#supplierName').val('');
            $('#contactPerson').val('');
            $('#email').val('');
            $('#phone').val('');
            $('#address').val('');

            // Show the add supplier modal
            $('#addSupplierModal').modal('show');
        });
    </script>
</div>