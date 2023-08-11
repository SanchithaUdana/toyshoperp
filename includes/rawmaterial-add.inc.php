<?php

require_once('db_conn.php');
require_once('functions.php');

$materialName = $_POST["addMaterialName"];
$stockq = $_POST["addStockq"];
$uprice = $_POST["adduprice"];
$supplier = $_POST["addsupplier"];
// $address = $_POST["addAddress"];

if (isset($_POST["submit"])) {
    rawmaterialAdd($con, $addMaterialName, $addStockq, $adduprice, $addsupplier);
}