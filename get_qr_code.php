<?php 
// Include the qrlib file 
include 'phpqrcode/qrlib.php'; 


include('connection.php');

if(isset($_POST['container_code'])){

    $container_code = $_POST['container_code'];

    $weight = $_POST['weight'];

    $date_arrived = $_POST['date_arrived'];

    $date_arrived = date('Y-m-d', strtotime($date_arrived));

    $export_date = $_POST['export_date'];

    $export_date = date('Y-m-d', strtotime($export_date));

    $text = "qr_code generated"; 
  
	// $path variable store the location where to  
	// store image and $file creates directory name 
	// of the QR code file by using 'uniqid' 
	// uniqid creates unique id based on microtime 
	$path = 'qrcodes/';
	$file =  uniqid().".png";
	$file_name = $path.$file; 
	  
	// $ecc stores error correction capability('L') 
	$ecc = 'L'; 
	$pixel_Size = 10; 
	$frame_Size = 10; 
	  
	// Generates QR Code and Stores it in directory given 
	QRcode::png($text, $file_name, $ecc, $pixel_Size, $frame_size); 

	if($stmt = $conn->query($sql)){

	    move_uploaded_file($file, "$path");
	}

	  
	// // Displaying the stored QR code from directory 
	// echo "<center><img src='".$file."'></center>"; 


    $sql = "INSERT INTO packhouse_records (date_arrived, export_date,container, weight, qr_code)
      VALUES ('$date_arrived', '$export_date', '$container_code', '$weight', '$file_name')";

    if ($conn->query($sql)) {

        
        header("Location: packhouse_records.php");

        exit();

    }
}



?> 