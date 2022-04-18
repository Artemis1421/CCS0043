<?php
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #1B</title>
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
		  	width: 200px;
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

		input[type=submit] {
			background-color: gray;
			font-weight: bold;
			border-radius: 12px;
		    width: 100px;  height: 50px;
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
	  	<a href="Tec3A.php">Activity A</a>
	  	<a href="Tec3A.php">Laboratory Problem #1</a>
	  	<a href="Tec3_2A.php">Laboratory Problem #2</a>
	  	<a href="Tec3_2A_Home.php">Laboratory Problem #3</a>
	  	<br>
	  	<a href="Tec3B.php">Activity B</a>
		<a href="Tec3B.php">Laboratory Problem #1</a>
		<a href="Tec3_2B.php">Laboratory Problem #2</a>
		<a href="Tec3_3B.php">Laboratory Problem #3</a>
		<a href="Tec3_4B.php">Laboratory Problem #4</a>
		<br><br>
		<a href="../home.php">Main Menu</a>
		<br><br>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 1B</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				1. Create a registration module just like what is shown below. Using $_GET or $_POST get the data from the forms and display below. Integrate HTML and CSS.
			</p><hr>
			<p style="font-size: 28px"><b>OUPUT:</b></p>

			<h1 style="padding-left: 50px"><u>My Personal Information</u></h1>
			<form action="" method="post">
				<h1>
					<span style="padding-left: 100px">First Name:</span>
					<input type="text" name="fname" size="55px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Middle Name:</span>
					<input type="text" name="mname" size="50px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Last Name:</span>
					<input type="text" name="lname" size="56px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Username:</span>
					<input type="text" name="uname" size="57px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Password:</span>
					<input type="text" name="pass" size="58px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Confirm Password:</span>
					<input type="text" name="confirmPass" size="37x" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Birthday:</span>
					<input type="text" name="birthday" size="60px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Email:</span>
					<input type="text" name="email" size="67px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Contact Number:</span>
					<input type="text" name="contact" size="42px" style="text-align: center">
				</h1>
				<br>
				<span style="padding-left: 100px">
					<input type="submit" value="SUBMIT" name="submitButton" size="50px">
				</span>
			</form>
			<br>
			<div style="padding-left: 100px">
				<?php 

					if(isset($_POST['submitButton'])){
						$fname = $_POST['fname'];
						$mname = $_POST['mname'];
						$lname = $_POST['lname'];
						$uname = $_POST['uname'];
						$pass = $_POST['pass'];
						$confirmPass = $_POST['confirmPass'];
						$birthday = $_POST['birthday'];
						$email = $_POST['email'];
						$contact = $_POST['contact'];

						include 'config.php';
					
						if(@$pass == @$confirmPass and @$pass != ""){
							@$sql = "INSERT INTO register(fname,mname,lname,uname,pass,confirmPass,birthday,email,contact) VALUES ('$fname','$mname','$lname','$uname','$pass','$confirmPass','$birthday','$email','$contact')";
							$result = mysqli_query($conn, $sql);

							echo "<div style='color:green; font-size:28px'>Personal information have been successfully entered in the database.</div>";
						}
						else{
							echo "<div style='color:red; font-size:28px'>Password and Confirm password are not the same. Please try again.</div>";
						}
					}
				?>
			</div>
			<br>
		</div>
	</div>
</body>
</html>