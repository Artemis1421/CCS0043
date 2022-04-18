<?php 
	$sname= "localhost";
	$uname= "root";
	$password = "";
	$db_name = "users_db";
	$conn = mysqli_connect($sname, $uname, $password, $db_name);

	if (!$conn) {
    	echo "Connection failed!";
	}
	else{
		echo "Connection successful! <br>".$db_name;
	}
?>