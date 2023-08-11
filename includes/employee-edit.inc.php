<?php

require_once('db_conn.php');
require_once('functions.php');

$employeeID = $_POST["editEmployeeID"];
$employeeName = $_POST["editEmployeeName"];
$position = $_POST["editPosition"];
$email = $_POST["editEmail"];
$phone = $_POST["editPhone"];
$address = $_POST["editAddress"];

if (isset($_POST["submit"])) {
    emloyeeEdit($con, $employeeID, $employeeName, $position, $email, $phone, $address);
}