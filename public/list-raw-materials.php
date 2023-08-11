<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raw Materials List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <?php include_once('header.php'); ?>

    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Raw Materials List</h3>
                            <h6 class="font-weight-normal mb-0">All materials are up-to-date. You have <span
                                    class="text-primary">2
                                    low stock materials!</span></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addRawMaterialModal">Add</button>
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
                                            <th>Material ID</th>
                                            <th>Material Name</th>
                                            <th>Stock Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Supplier</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                    $table = "rawmaterial";
                    $result = viewAll($con, $table);
                    if (mysqli_num_rows($result) > 0) {
                      while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td>
                                                <?php echo $row['MaterialID']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['MaterialName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['StockQuantity']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['UnitPrice']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['Supplier']; ?>
                                            </td>

                                            <td>
                                                <a
                                                    href="edit-rawmateial.php?MaterialID=<?php echo $row['MaterialID']; ?>"><button
                                                        class="btn btn-primary btn-sm edit-btn">Edit</button></a>
                                                <button class="btn btn-danger btn-sm delete-btn"
                                                    data-id="RAW1111">Delete</button>
                                            </td>
                                        </tr>
                                        <?php }
                    }
                    ?>
                                        <!-- Add more rows for other raw materials -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->

        <!-- Add Raw Material Modal -->
        <div class="modal fade" id="addRawMaterialModal" tabindex="-1" role="dialog"
            aria-labelledby="addRawMaterialModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addRawMaterialModalLabel">Add Raw Material</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Add raw material form -->
                        <form>

                            <div class="form-group">
                                <label for="materialName">Material Name</label>
                                <input type="text" class="form-control" id="addMaterialName" name="addMaterialName">
                            </div>
                            <div class="form-group">
                                <label for="stockQuantity">Stock Quantity</label>
                                <input type="text" class="form-control" id="addStockq" name="addStockq">
                            </div>
                            <div class="form-group">
                                <label for="unitPrice">Unit Price</label>
                                <input type="text" class="form-control" id="adduprice" name="adduprice">
                            </div>
                            <div class="form-group">
                                <label for="supplier">Supplier</label>
                                <input type="text" class="form-control" id="addsupplier" name="addsupplier">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" name="submit">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Raw Material Modal -->
        <div class="modal fade" id="editRawMaterialModal" tabindex="-1" role="dialog"
            aria-labelledby="editRawMaterialModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editRawMaterialModalLabel">Edit Raw Material</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Edit raw material form -->
                        <form>
                            <div class="form-group">
                                <label for="editMaterialID">Material ID</label>
                                <input type="text" class="form-control" id="editMaterialID"
                                    placeholder="Enter material ID" readonly>
                            </div>
                            <div class="form-group">
                                <label for="editMaterialName">Material Name</label>
                                <input type="text" class="form-control" id="editMaterialName"
                                    placeholder="Enter material name">
                            </div>
                            <div class="form-group">
                                <label for="editStockQuantity">Stock Quantity</label>
                                <input type="text" class="form-control" id="editStockQuantity"
                                    placeholder="Enter stock quantity">
                            </div>
                            <div class="form-group">
                                <label for="editUnitPrice">Unit Price</label>
                                <input type="text" class="form-control" id="editUnitPrice"
                                    placeholder="Enter unit price">
                            </div>
                            <div class="form-group">
                                <label for="editSupplier">Supplier</label>
                                <input type="text" class="form-control" id="editSupplier" placeholder="Enter supplier">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Delete Confirmation Modal -->
        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
            aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Delete Raw Material</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this raw material?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger">Delete</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include_once('footer.php'); ?>

    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        // Edit button click event
        $('.edit-btn').click(function() {
            // Get the row containing the data
            var row = $(this).closest('tr');
            // Get the data from the row
            var materialID = row.find('td:eq(0)').text();
            var materialName = row.find('td:eq(1)').text();
            var stockQuantity = row.find('td:eq(2)').text();
            var unitPrice = row.find('td:eq(3)').text();
            var supplier = row.find('td:eq(4)').text();
            // Set the data in the edit form
            $('#editMaterialID').val(materialID);
            $('#editMaterialName').val(materialName);
            $('#editStockQuantity').val(stockQuantity);
            $('#editUnitPrice').val(unitPrice);
            $('#editSupplier').val(supplier);
        });

        // Delete button click event
        $('.delete-btn').click(function() {
            // Get the row containing the data
            var row = $(this).closest('tr');
            // Get the data from the row
            var materialName = row.find('td:eq(1)').text();
            // Set the material name in the delete confirmation modal
            $('#deleteConfirmationModalLabel').text('Delete Raw Material: ' + materialName);
        });
    });
    </script>

</body>

</html>