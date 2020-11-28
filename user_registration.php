<?php 


include('connection.php');


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$user_role = $_POST['user_role'];
$password = $_POST['password'];
$address = $_POST['address'];
$gender = $_POST['gender'];

if(isset($_POST['district_id'])){

	$district_id = $_POST['district_id'];
}




$password = md5($password);

$sql = "INSERT INTO users (first_name, last_name, email,contact,address,gender,user_role,password)
VALUES ('$first_name', '$last_name', '$email', '$contact', '$address', '$gender', '$user_role', '$password')";


if ($conn->query($sql)) {

	$sql = "SELECT * FROM users ORDER BY ID DESC LIMIT 1";

	$stmt = $conn->query($sql);

	if($stmt->rowCount() > 0){

	 	$user = $stmt->fetchObject();
	}


	$user_id = $user->id;

	if($user_role == 'district_official'){

		$sql = "INSERT INTO district_users (user_id, district_id)
			VALUES ('$user_id', '$district_id')";

		$conn->query($sql);
	}

	

  	header("Location: index.php");

	exit();
} else {
  echo "Error: " . $sql . "<br>";
}






?>