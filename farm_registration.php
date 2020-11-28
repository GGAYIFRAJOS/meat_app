<?php 


include('connection.php');


$farm_name = $_POST['farm_name'];
$village_id = $_POST['village_id'];
$farm_acreage = $_POST['farm_acreage'];
$animal_type = $_POST['animal_type'];
$farmer_id = $_POST['farmer_id'];
$gps_latitude = $_POST['gps_latitude'];
$gps_longitude = $_POST['gps_longitude'];




$password = md5($password);

$sql = "INSERT INTO farm (farm_name, village_id, farm_acreage, animal_type, farmer_id, gps_latitude,gps_longitude)
VALUES ('$farm_name', '$village_id', '$farm_acreage', '$animal_type', '$farmer_id', '$gps_latitude', '$gps_longitude')";


if ($conn->query($sql)) {

  	header("Location: farms.php");
	exit();

} else {

  echo "Error: " . $sql . "<br>";
}






?>