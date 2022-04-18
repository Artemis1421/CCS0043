<?php
	session_start();

	session_unset();
	session_destroy();

	header("location: Act7_2.php");
?>