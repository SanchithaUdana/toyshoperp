<?php

require_once('db_conn.php');
require_once('functions.php');

$supplierID = $_POST["editSupplierID"];
$supplierName = $_POST["editSupplierName"];
$contactPerson = $_POST["editContactPerson"];
$email = $_POST["editEmail"];
$phone = $_POST["editPhone"];
$address = $_POST["editAddress"];

if (isset($_POST["submit"])) {
    supplierEdit($con, $supplierID, $supplierName, $contactPerson, $email, $phone, $address);
}