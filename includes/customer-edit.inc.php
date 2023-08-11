<?php

require_once('db_conn.php');
require_once('functions.php');

$customerID = $_POST["editCustomerID"];
$customerName = $_POST["editCustomerName"];
$contactPerson = $_POST["editContactPerson"];
$email = $_POST["editEmail"];
$phone = $_POST["editPhone"];
$address = $_POST["editAddress"];

if (isset($_POST["submit"])) {
    customerEdit($con, $customerID, $customerName, $contactPerson, $email, $phone, $address);
}