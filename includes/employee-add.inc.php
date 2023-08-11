<?php

require_once('db_conn.php');
require_once('functions.php');

$employeeName = $_POST["addEmployeeName"];
$position = $_POST["addPosition"];
$email = $_POST["addEmail"];
$phone = $_POST["addPhone"];
$address = $_POST["addAddress"];

if (isset($_POST["submit"])) {
    employeeAdd($con, $employeeName, $position, $email, $phone, $address);
}