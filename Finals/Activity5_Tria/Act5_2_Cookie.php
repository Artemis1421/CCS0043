<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #2</title>
</head>
<body style="background-color: #F0F7EE;">
	<style style="background-color: #F0F7EE">
		.content{
			max-width: 1000px;
			margin: auto;
		}

		.main{
			position: absolute;
			margin-left: 150px;
			padding-left: 150px;
		}

		.sidenav {
		 	height: 100%;
		  	width: 180px;
		  	position: fixed;
		  	z-index: 1;
		  	top: 0;
		  	left: 0;
		  	background-color: #3F612D;
		  	overflow-x: hidden;
		  	padding-top: 20px;
		}

		.sidenav a {
		  	padding: 16px 16px 6px 32px;
		  	text-decoration: none;
		  	font-size: 25px;
		  	color: #f2f2f2;
		  	display: block;
		}

		.sidenav a:hover {
		  	color: #D1D5DE;
		}

		@media screen and (max-height: 450px) {
		  	.sidenav {padding-top: 15px;}
		  	.sidenav a {font-size: 18px;}
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Act5_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act5_2.php">Laboratory Problem #2</a>
		<br>
		<a href="Act5_3.php">Laboratory Problem #3</a>
		<br>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 2</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				2. Create a personal information webpage. Using setcookie() function, create cookies for the firstname, middle name and lastname. It must show the cookies after 10, 20 and 30 seconds.
			</p> <hr>
			<br>

			<h1>
				Contents of The Cookie:
			</h1>
			<br>

			<?php
				if(isset($_COOKIE['fname'])){
					echo "<h1 style=\"font-size:20px\">Your cookie is ".$_COOKIE['fname']." ".$_COOKIE['mname']." ".$_COOKIE['lname']."</h1>";
					echo "<br>";
					echo "<h1 style=\"font-size:20px\">First Name: ".$_COOKIE['fname'];
					echo "<br>";
					echo "<h1 style=\"font-size:20px\">Middle Name: ".$_COOKIE['mname'];
					echo "<br>";
					echo "<h1 style=\"font-size:20px\">Last Name: ".$_COOKIE['lname'];
				}
				else{
					echo "<h1 style=\"font-size:20px\">Your cookie is no longer available.</h1>";
				}	
			?>
		</div>
	</div>
</body>
</html>c