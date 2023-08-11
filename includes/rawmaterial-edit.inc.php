<?php

require_once('db_conn.php');
require_once('functions.php');

$mterialID = $_POST["editMaterialID"];
$materialName = $_POST["editMaterialName"];
$stockq = $_POST["editStockq"];
$uprice = $_POST["edituprice"];
$supplier = $_POST["editsupplier"];


if (isset($_POST["submit"])) {
    supplierEdit($con, $supplierID, $supplierName, $contactPerson, $email, $phone, $address);
}