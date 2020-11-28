<?php 


 include('connection.php');

if(isset($_POST['abattoir_name'])){

    $abattoir_name = $_POST['abattoir_name'];
    $location = $_POST['location'];
    $gps_latitude = $_POST['gps_latitude'];
    $gps_longitude = $_POST['gps_longitude'];


    $sql = "INSERT INTO abattoirs (abattoir_name, location, gps_latitude,gps_longitude)
    VALUES ('$abattoir_name','$location', '$gps_latitude', '$gps_longitude')";


    if ($conn->query($sql)) {

      
      header("Location: abattoirs.php");

      exit();

    } else {
      echo "Error: " . $sql . "<br>";
    }


  }


?>