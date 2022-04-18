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

		.box{
			width: 350px;
			height: 400px;
			padding: 50px;
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
			<br><br><br><br>
			<?php 
				include "config.php";
				session_start();

				if (!isset($_SESSION['login'])) {
					header("location: logout.php");
				}

				if(isset($_POST['save'])){
					$email = $_POST['email'];
					$username = $_POST['username'];
					$password = $_POST['password'];
					$userlevel = $_POST['userlevel'];
					$status = $_POST['status'];
				
					if(@$email != "" || @$username != "" || @$password != "" || @$userlevel != "" || @$status != ""){
						$query = "INSERT INTO register (email, username, password, userlevel, status) VALUES ('$email','$username','$password','$userlevel','$status')";
						$result = mysqli_query($conn, $query);
						
						$msg = "<div style='color:green; font-size:28px; padding-left:120px'>Personal information have been successfully entered in the database.</div>";
					}
					else{
						$msg = "<div style='color:red; font-size:28px; padding-left:300px'>Please fill out all of the fields!</div>";
					}
				}
			?>

			<form action="" method="post" class="box">
				<h1> Add Record </h1>
				<span style="padding-left: 300px">
					<a href="admin.php">Back</a> <br>
				</span>
				<hr>
				<p>
					Email: &nbsp;&nbsp;
					<input type="text" name="email" size="42x" style="text-align: center">
				</p>
				
				<p>
					Username: &nbsp;
					<input type="text" name="username" size="38px" style="text-align: center">
				</p>
				
				<p>
					Password:
					<input type="password" name="password" size="40px" style="text-align: center">
				</p>
				
				<p>
					User level: &nbsp;
					<input type="text" name="userlevel" size="38px" style="text-align: center" placeholder="admin/user">
				</p>
				<p>
					Status: &nbsp;
					<input type="text" name="status" size="42px" style="text-align: center" placeholder="active/disable">
				</p>
				<br>
				<input type="submit" value="Save" name="save">
			</form>
			<br>
			<div>
				<?php echo @$msg; ?>	
			</div>
		</div>
	</div>
</body>
</html>