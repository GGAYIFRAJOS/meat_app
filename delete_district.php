<?php 

include('connection.php');

 $district_id = $_GET['district_id'];

 $sql = "DELETE FROM  districts  WHERE id = '$district_id'";


  if ($conn->query($sql)) {

    header("Location: districts.php");

    exit();
  }




?>