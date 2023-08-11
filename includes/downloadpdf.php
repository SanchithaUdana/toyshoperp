<?php

$invoice = file_get_contents('http://localhost:8888/toyshoperp/pages/pdfGenerate/new-invoice.php');


require '../vendor/autoload.php';


// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf(array('enable_remote' => true));
$dompdf->loadHtml($invoice);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("sales.pdf");
?>