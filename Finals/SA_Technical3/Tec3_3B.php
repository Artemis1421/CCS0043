<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #1</title>
<?php 
	session_start();
	include 'config.php';

	$user = $_SESSION['user'];
	$fname = $user['fname'];
	$mname = $user['mname'];
	$lname = $user['lname'];
	$birthday = $user['birthday'];
	$email = $user['email'];
	$contact = $user['contact'];
	$pass = $user['pass'];

	if (!isset($_SESSION['login'])) {
		header("location: logout.php");
	}

	if (isset($_POST['resetButton'])) {
		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$reNewPass = $_POST['reNewPass'];

		print("NEW PASS".$newPass);

		if($currentPass == $pass){
			if($newPass == $reNewPass){
				$sql = "UPDATE register SET pass='$newPass', confirmPass='$newPass'";
				$result = mysqli_query($conn, $sql);

				if ($conn->query($sql) === TRUE) {
					echo "Password updated successfully!";
					header("location: logout.php");
				}
				else{
					$msg = $error = "<p style='color:red; font-size:26px; margin-left:200px'>Error updating record. Please try again.</p>" . $conn->error;
				}
			}
			else{
				$msg = $error = "<p style='color:red; font-size:26px; margin-left:100px'>New password and Re-Enter new password should be the same. Please try again.</p>";
			}
		}
		else{
			$msg = "<p style='color:red; font-size:26px; margin-left:100px'>Current password is not the same with the old password. Please try again.</p>";
		}
	}
?>

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
			border-radius: 12px;
		    width: 350px;  height: 50px;
		    text-align: center;
		}

		.box{
			width: 550px;
			height: 450px;
			padding: 50px;
			margin-left: 150px;
			border: 3px solid black;
			border-radius: 12px;
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
			<h1> 
				<u>PROBLEM # 2B</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				3. User –Side Retrieval of Record
				Please see screenshot below for your guide.
			</p><hr>
			<p style="font-size: 28px"><b>OUPUT:</b></p>

			<div class="box">
				<h1 style="font-size: 32px"> User Information Form </h1>
				<span style="padding-left: 490px">
					<a href="logout.php">Log-out</a>
				</span>
				<p>
					<b>Welcome</b> <?php echo $fname." ".$mname." ".$lname; ?> <br>
					<b>Birthday</b> <?php echo $birthday; ?> <br>
					<b>Contact Details</b> <br>
					<span style="padding-left: 30px">
						<b>Email:</b> <?php echo $email; ?> <br>
					</span>
					<span style="padding-left: 30px">
						<b>Contact:</b> <?php echo $contact; ?> <br>
					</span>
				</p> <hr>
				<form action="" method="post">
					<p style="font-size: 24px">
						RESET PASSWORD <br>
					</p>
					<p>
						Enter Current Password:
						<input type="text" name="currentPass" size="52px" style="text-align: center"> <br><br>
						Enter New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="newPass" size="52px" style="text-align: center"> <br><br>
						Re-Enter New Password:
						<input type="text" name="reNewPass" size = 51px style="text-align: center;">
					</p>
					<span style="padding-left: 100px">
						<input type="submit" value="Reset Password" name="resetButton">
					</span>
				</form>
			</div>
			<br>
			<?php echo @$msg; ?>
			<br><br>
		</div>
	</div>
</body>
</html>