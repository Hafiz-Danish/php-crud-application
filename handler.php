<?php


	
	//created a connection variable
    $connection = new mysqli("localhost", "root", "", "crud") or die("Connection Error " . mysql_error($connection));

    
    if (isset($_POST["submit"])) {
    	//storing the coming values from the form into the variables
    	$username = $_POST["username"];
    	$city = $_POST["city"];
    	$salary = $_POST["salary"];


    	//sending data to the database table
    	$connection->query("INSERT INTO data(username, city, salary) VALUES('$username', '$city', '$salary')");

    	header("locaton: crud.php");
    }

?>










