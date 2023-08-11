<?php

require_once('db_conn.php');
require_once('functions.php');

$customerName = $_POST["addCustomerName"];
$contactPerson = $_POST["addContactPerson"];
$email = $_POST["addEmail"];
$phone = $_POST["addPhone"];
$address = $_POST["addAddress"];

if (isset($_POST["addCus"])) {
    customerAdd($con, $customerName, $contactPerson, $email, $phone, $address);
}