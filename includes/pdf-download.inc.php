<?php

require_once('db_conn.php');
require_once('functions.php');

if (isset($_POST["generatePdf"])) {
  include_once './downloadpdf.php';
}