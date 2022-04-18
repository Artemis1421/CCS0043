<?php
	$host = "localhost";
	$db_uname = "root";
	$dbname = "ccs0043";

	$conn = mysqli_connect($host, $db_uname);

	mysqli_select_db($conn, $dbname) or die(mysqli_error());

?>