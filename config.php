<?php

$host="localhost";
$username="u406176785_seeders_user";
$pass="Seeders@123";
$db="u406176785_seeders_db";
		
// $host="localhost:3301";
// $username="root";
// $pass="";
// $db="seeders";
		
		$conn=new mysqli($host,$username,$pass,$db);
		
		if($conn->connect_error)
		{
			die("connection failed:" . $conn->connect_error);
		}
		?>