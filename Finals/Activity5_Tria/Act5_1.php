<?php
	if(isset($_GET['submit'])){
		$fname = $_GET['fname'];
		$mname = $_GET['mname'];
		$lname = $_GET['lname'];
		$dob = $_GET['dob'];
		$address = $_GET['address'];

		$fname = "<p style=\"font-size:20px; padding-left: 325px\"><b>First Name</b>: ".@$fname."</p>";
		$mname = "<p style=\"font-size:20px; padding-left: 325px\"><b>Middle Name</b>: ".@$mname."</p>";
		$lname = "<p style=\"font-size:20px; padding-left: 325px\"><b>Last Name</b>: ".@$lname."</p>";
		$dob = "<p style=\"font-size:20px; padding-left: 325px\"><b>Date of Birth</b>: ".@$dob."</p>";
		$address = "<p style=\"font-size:20px; padding-left: 325px\"><b>Address</b>: ".@$address."</p>";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #1</title>
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

		input[type="submit"]{
			font-size: 20px;
			width: 100px;
			height: 50px;
			background-color: #CBD2D0;
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
				<u>PROBLEM # 1</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				1. Create  apersonal  information  webpage.  Using  $__GET and $_POST  the data (firstname,  middlename,  lastname,  date  of  birth  and  address) from  the forms and display below.
			</p> <hr>
			<br>

			<form action="" style="font-size: 30px; padding-left: 325px" >
				<p>
					First Name: <input type="text" name="fname" id="" size="40">
				</p>
				<p>
					Middle Name: <input type="text" name="mname" id="" size="35">
				</p>
				<p>
					Last Name: <input type="text" name="lname" id="" size="41">
				</p>
				<p>
					Date of Birth: <input type="text" name="dob" id="" size="37">
				</p>
				<p>
					Address: <input type="text" name="address" id="" size="47">
				</p>
				<input type="submit" name="submit" value="Submit">
			</form>	
			<p style="font-size: 28px; padding-left: 325px">
				<?php 
					echo @$fname;
					echo @$mname;
					echo @$lname;
					echo @$dob;
					echo @$address;
				?>
			</p>
			<br><br>
		</div>
	</div>
</body>
</html>