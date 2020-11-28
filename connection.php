<?php  

    $dbname = "farm_app";
    $host = "localhost";
    $username = "root";
    $password = "";

    try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
	} catch (PDOException $pe) {
	    die("Could not connect to the database $dbname :" . $pe->getMessage());
	}

?>