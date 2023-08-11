<?php

require_once('db_conn.php');
require_once('functions.php');

$supplierName = $_POST["addSupplierName"];
$contactPerson = $_POST["addContactPerson"];
$email = $_POST["addEmail"];
$phone = $_POST["addPhone"];
$address = $_POST["addAddress"];

if (isset($_POST["submit"])) {
    supplierAdd($con, $supplierName, $contactPerson, $email, $phone, $address);
}