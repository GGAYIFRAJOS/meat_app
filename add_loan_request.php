<?php  


include('connection.php');


if(isset($_POST['farmer_id'])){

      $farmer_id = $_POST['farmer_id'];
      $loan_amount = $_POST['loan_amount'];
      $reason = $_POST['reason'];
      $preffered_bank = $_POST['preffered_bank'];


      $sql = "INSERT INTO loans (farmer_id, loan_amount, reason, preffered_bank)
      VALUES ('$farmer_id', '$loan_amount', '$reason', '$preffered_bank')";


      if ($conn->query($sql)) {

        
        header("Location: loan_requests.php");

        exit();

      } else {
        echo "Error: " . $sql . "<br>";
      }
  }






?>