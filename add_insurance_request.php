<?php  


include('connection.php');


if(isset($_POST['farmer_id'])){

      $farmer_id = $_POST['farmer_id'];
      $insurance_type = $_POST['insurance_type'];
      $reason = $_POST['reason'];
      $issuer = $_POST['issuer'];


      $sql = "INSERT INTO insurance (farmer_id, insurance_type, reason, issuer)
      VALUES ('$farmer_id', '$insurance_type', '$reason', '$issuer')";


      if ($conn->query($sql)) {

        
        header("Location: insurance_requests.php");

        exit();

      } else {
        echo "Error: " . $sql . "<br>";
      }
  }






?>