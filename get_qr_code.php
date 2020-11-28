<?php 
// Include the qrlib file 
include 'phpqrcode/qrlib.php'; 


include('connection.php');

if(isset($_POST['title'])){

    $container_code = $_POST['container_code'];

    $packhouse_id = $_POST['packhouse_id'];

    $weight = $_POST['weight'];

    $date_arrived = $_POST['date_arrived'];

    $export_date = $_POST['export_date'];

    $text = ""; 
  
	// $path variable store the location where to  
	// store image and $file creates directory name 
	// of the QR code file by using 'uniqid' 
	// uniqid creates unique id based on microtime 
	$path = 'qrcodes/'; 
	$file = $path.uniqid().".png"; 
	  
	// $ecc stores error correction capability('L') 
	$ecc = 'L'; 
	$pixel_Size = 10; 
	$frame_Size = 10; 
	  
	// Generates QR Code and Stores it in directory given 
	QRcode::png($text, $file, $ecc, $pixel_Size, $frame_size); 

	if($stmt = $conn->query($sql)){

	    move_uploaded_file($file, "$path");
	}

	  
	// Displaying the stored QR code from directory 
	echo "<center><img src='".$file."'></center>"; 


    $sql = "INSERT INTO certification (farmer_id, certificate_type, reason, issuer)
      VALUES ('$farmer_id', '$certificate_type', '$reason', '$issuer')";

    if ($conn->query($sql)) {

        
        header("Location: packhouse_records.php");

        exit();

    }
}



?> 