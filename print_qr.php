<?php

include('connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM packhouse_records WHERE id = '$id'";

$stmt = $conn->query($sql);

$packhouse_record = $stmt->fetchObject();




$html = "<img width=200 height=200  src=$packhouse_record->qr_code>";

$filename = "qrcode";

// include autoloader
require_once 'dompdf/autoload.inc.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream($filename);