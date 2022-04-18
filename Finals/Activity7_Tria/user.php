<?php 
	session_start();
	include 'config.php';

	if (!isset($_SESSION['loginU'])) {
		header("location: logout.php");
	}

	$db = $_SESSION['dbU'];
	$username = $db['username'];
	$userlevel = $db['userlevel'];
	$email = $db['email'];
	$password = $db['password'];

	$sql1 = "SELECT image FROM register WHERE username='$username'";
	$result1 = mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($result1);

	$src = 'image/'.$row['image'];

	if ($row['image'] != "" && !isset($_SESSION['loginU'])) {
		header("location: logout.php");
	}

	if (isset($_POST['submit'])) {
		$currentPass = $_POST['currentPass'];
		$newPass = $_POST['newPass'];
		$reNewPass = $_POST['reNewPass'];

		if($currentPass == $password){
			if($newPass == $reNewPass){
				$sql = "UPDATE register SET password='$newPass' WHERE username='$username'";
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

	if (isset($_POST['upload'])) {
		$filename = $_FILES["uploadfile"]["name"];
		$tempname = $_FILES["uploadfile"]["tmp_name"];
		$folder = "image/".$filename;

		$sql = "UPDATE register SET image = '$filename' WHERE username='$username'";
		$result = mysqli_query($conn,$sql);

		if(move_uploaded_file($tempname, $folder)){
			$msg = "Image uploaded successfully";
		}
		else{
			$msg = "Failed to upload image";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #3</title>
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

		.box{
			width: 550px;
			height: 650px;
			padding: 25px;
			margin-left: 250px;
			border: 2px solid black;
			border-radius: 12px;
		}

		input[type=submit] {
			font-weight: bold;
			border-radius: 12px;
		    width: 330px;  height: 50px;
		    text-align: center;
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Act7_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act7_2.php">Laboratory Problem #2</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br><br>
			<div class="box">
				<h1 style="font-size: 32px"> User Account </h1>
				<span style="padding-left: 490px">
					<a href="logout.php">Log-out</a>
				</span><br>
				<p>
					<div style="padding-left: 150px">
						<img src="<?php echo $src ?>" alt="" height="200px" width="200px" style="float: right">
					</div>
					<b>Welcome</b>
					<div style="padding-left: 30px; font-size: 28px">
						<?php echo $username; ?> (user)
					</div> <br>
					<b>Userlevel:</b>
					<div style="padding-left: 30px; font-size: 24px">
						<?php echo $userlevel; ?>
					</div> <br>
					<b>Email:</b>
					<div style="padding-left: 30px; font-size: 22px">
						<?php echo $email; ?>
					</div> <br>
					<div style="padding-left: 350px">
						<form action="" method = "post" enctype="multipart/form-data">
						<input type="file" name="uploadfile" value="">
						<button type="submit" name="upload">Upload</button>
						</form>
					</div>
				</p> <hr>
				<form action="" method="post">
					<p style="font-size: 24px">
						RESET PASSWORD <br>
					</p>
					<p>
						Enter Current Password:
						<input type="password" name="currentPass" size="52px" style="text-align: center"> <br><br>
						Enter New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="password" name="newPass" size="52px" style="text-align: center"> <br><br>
						Re-Enter New Password:
						<input type="password" name="reNewPass" size = 51px style="text-align: center;">
					</p><br>
					<span style="padding-left: 95px">
						<input type="submit" value="Submit" name="submit">
					</span>
				</form>
			</div>
		</div>
	</div>
</body>
</html>