<?php include_once('header.php'); ?>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Edit Customer</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <?php $row = customerGetData($con); ?>
                        <form method="post" action="../includes/customer-edit.inc.php">
                            <div class="modal-body">
                                <!-- Edit customer form fields -->
                                <div class="form-group">
                                    <label for="editCustomerID">Customer ID</label>
                                    <input type="text" class="form-control" id="editCustomerID" name="editCustomerID" value="<?php echo $row['CustomerID']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="editCustomerName">Customer Name</label>
                                    <input type="text" class="form-control" id="editCustomerName" name="editCustomerName" value="<?php echo $row['CustomerName']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="editContactPerson">Contact Person</label>
                                    <input type="text" class="form-control" id="editContactPerson" name="editContactPerson" value="<?php echo $row['ContactPerson']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="editEmail">Email</label>
                                    <input type="email" class="form-control" id="editEmail" name="editEmail" value="<?php echo $row['Email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="editPhone">Phone</label>
                                    <input type="tel" class="form-control" id="editPhone" name="editPhone" value="<?php echo $row['Phone']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="editAddress">Address</label>
                                    <input type="text" class="form-control" id="editAddress" name="editAddress" value="<?php echo $row['Address']; ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Save</button>
                                <a href="customers.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('footer.php'); ?>

    </body>

    </html>