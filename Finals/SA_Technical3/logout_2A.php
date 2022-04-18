<?php
	session_start();

	session_unset();
	session_destroy();

	header("location: Tec3_2A.php");
?>