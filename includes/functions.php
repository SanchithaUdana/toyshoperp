<?php
function viewAll($conn, $table)
{
    $stmt = $conn->prepare("SELECT * FROM `$table`");
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    return $result;
}

function supplierAdd($con, $supplierName, $contactPerson, $email, $phone, $address)
{
    // Retrieve the last inserted SupplierID from the database
    $lastSupplierID = "";
    $query = "SELECT MAX(SupplierID) AS SupplierID FROM suppliers";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $lastSupplierID = $row['SupplierID'];
    }

    // Extract the numeric part of the last SupplierID and increment it
    $numericPart = intval(substr($lastSupplierID, 3));
    $newNumericPart = str_pad($numericPart + 1, 4, "0", STR_PAD_LEFT);

    // Generate the new SupplierID
    $newSupplierID = "SUP" . $newNumericPart;

    // Insert the new supplier into the database
    $sql = "INSERT INTO suppliers (SupplierID, supplierName, contactPerson, email, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $newSupplierID, $supplierName, $contactPerson, $email, $phone, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/suppliers.php");
    exit();
}

function supplierGetData($con)
{
    $SupplierID = $_GET['SupplierID'];
    $sql = "SELECT * FROM suppliers WHERE SupplierID = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $SupplierID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        return $row;
    } else {
        exit();
    }
}

function supplierEdit($con, $supplierID, $supplierName, $contactPerson, $email, $phone, $address)
{
    $sql = "UPDATE suppliers SET supplierName=?, contactPerson=?, email=?, phone=?, address=? WHERE supplierID=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $supplierName, $contactPerson, $email, $phone, $address, $supplierID);
    $update_query = mysqli_stmt_execute($stmt);
    if ($update_query) {
        header("location: ../public/suppliers.php");
        exit();
    }
}

function customerAdd($con, $customerName, $contactPerson, $email, $phone, $address)
{
    // Retrieve the last inserted CustomerID from the database
    $lastCustomerID = "";
    $query = "SELECT MAX(CustomerID) AS CustomerID FROM customers";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $lastCustomerID = $row['CustomerID'];
    }

    // Extract the numeric part of the last CustomerID and increment it
    $numericPart = intval(substr($lastCustomerID, 3));
    $newNumericPart = str_pad($numericPart + 1, 4, "0", STR_PAD_LEFT);

    // Generate the new CustomerID
    $newCustomerID = "CUS" . $newNumericPart;

    // Insert the new customer into the database
    $sql = "INSERT INTO customers (CustomerID, customerName, contactPerson, email, phone, address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $newCustomerID, $customerName, $contactPerson, $email, $phone, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/customers.php");
    exit();
}

function customerGetData($con)
{
    $CustomerID = $_GET['CustomerID'];
    $sql = "SELECT * FROM customers WHERE CustomerID = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $CustomerID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        return $row;
    } else {
        exit();
    }
}

function customerEdit($con, $customerID, $customerName, $contactPerson, $email, $phone, $address)
{
    $sql = "UPDATE customers SET customerName=?, contactPerson=?, email=?, phone=?, address=? WHERE customerID=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $customerName, $contactPerson, $email, $phone, $address, $customerID);
    $update_query = mysqli_stmt_execute($stmt);
    if ($update_query) {
        header("location: ../public/customers.php");
        exit();
    }
}

function employeeAdd($con, $employeeName, $position, $email, $phone, $address)
{
    // Retrieve the last inserted EmployeeID from the database
    $lastEmployeeID = "";
    $query = "SELECT MAX(EmployeeID) AS EmployeeID FROM employees";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $lastEmployeeID = $row['EmployeeID'];
    }

    // Extract the numeric part of the last EmployeeID and increment it
    $numericPart = intval(substr($lastEmployeeID, 3));
    $newNumericPart = str_pad($numericPart + 1, 4, "0", STR_PAD_LEFT);

    // Generate the new EmployeeID
    $newEmployeeID = "EMP" . $newNumericPart;

    // Insert the new employee into the database
    $sql = "INSERT INTO employees (EmployeeID, EmployeeName, Position, Email, Phone, Address) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $newEmployeeID, $employeeName, $position, $email, $phone, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/employees.php");
    exit();
}

function employeeGetData($con)
{
    $EmployeeID = $_GET['EmployeeID'];
    $sql = "SELECT * FROM employees WHERE EmployeeID = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $EmployeeID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        return $row;
    } else {
        exit();
    }
}

function emloyeeEdit($con, $employeeID, $employeeName, $position, $email, $phone, $address)
{
    $sql = "UPDATE employees SET employeeName=?, position=?, email=?, phone=?, address=? WHERE employeeID=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $employeeName, $position, $email, $phone, $address, $employeeID);
    $update_query = mysqli_stmt_execute($stmt);
    if ($update_query) {
        header("location: ../public/employees.php");
        exit();
    }
}

function rawmaterialEdit($con, $employeeID, $employeeName, $position, $email, $phone, $address)
{
    $sql = "UPDATE employees SET employeeName=?, position=?, email=?, phone=?, address=? WHERE employeeID=?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "ssssss", $employeeName, $position, $email, $phone, $address, $employeeID);
    $update_query = mysqli_stmt_execute($stmt);
    if ($update_query) {
        header("location: ../public/employees.php");
        exit();
    }
}

function rawmaterialGetData($con)
{
    $EmployeeID = $_GET['MaterialID'];
    $sql = "SELECT * FROM rawmaterial WHERE MaterialID = ?";
    $stmt = mysqli_prepare($con, $sql);
    mysqli_stmt_bind_param($stmt, "s", $MaterialID);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        return $row;
    } else {
        exit();
    }
}

function rawmaterialAdd($con, $addMaterialName, $addStockq, $adduprice, $addsupplier)
{
    // Retrieve the last inserted EmployeeID from the database
    $lastMaterialID = "";
    $query = "SELECT MAX(MaterialID) AS MaterialID FROM rawmaterial";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $lastMaterialID = $row['MaterialID'];
    }

    // Extract the numeric part of the last EmployeeID and increment it
    $numericPart = intval(substr($lastMaterialID, 3));
    $newNumericPart = str_pad($numericPart + 1, 4, "0", STR_PAD_LEFT);

    // Generate the new EmployeeID
    $newMaterialID = "RAW" . $newNumericPart;

    // Insert the new employee into the database
    $sql = "INSERT INTO rawmaterial (MaterialID, MaterialName, StockQuantity, UnitPrice, Supplier) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "ssiss", $newMaterialID, $materialName, $stockq, $uprice, $supplier);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/list-raw-materials.php");
    exit();
}
