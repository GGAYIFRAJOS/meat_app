<?php  


include('connection.php');


if(isset($_POST['farmer_id'])){

      $farmer_id = $_POST['farmer_id'];
      $certificate_type = $_POST['certificate_type'];
      $reason = $_POST['reason'];
      $issuer = $_POST['issuer'];


      $sql = "INSERT INTO certification (farmer_id, certificate_type, reason, issuer)
      VALUES ('$farmer_id', '$certificate_type', '$reason', '$issuer')";


      if ($conn->query($sql)) {

        
        header("Location: certificate_requests.php");

        exit();

      } else {
        echo "Error: " . $sql . "<br>";
      }
  }






?>