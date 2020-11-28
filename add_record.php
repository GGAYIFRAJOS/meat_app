<?php 

include('connection.php');

if(isset($_POST['animal_id'])){

      $animal_id = $_POST['animal_id'];
      $date_arrived = $_POST['date_arrived'];
      $date_slaughtered = $_POST['date_slaughtered'];
      $container = $_POST['container'];
      $weight = $_POST['weight'];

      $date_arrived = date('Y-m-d', strtotime($date_arrived));

      $date_slaughtered = date('Y-m-d', strtotime($date_slaughtered));


    $sql = "INSERT INTO abattoir_records (animal_id, animal_weight, date_arrived, date_slaughtered, container_code)
    VALUES ('$animal_id', '$weight', '$date_arrived','$date_slaughtered','$container')";


    if ($conn->query($sql)) {

      
      header("Location: abattoir_records.php");

      exit();

    } else {
      echo "Error: " . $sql . "<br>";
    }


  }



 ?>