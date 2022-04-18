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
			height: 350px;
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

				if (isset($_POST['login'])) {
					$username = $_POST['username'];
					$password = $_POST['password'];

					$query = "SELECT email, username, password, userlevel, status FROM register WHERE username = '$username' AND password = '$password'";
					$result = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($result);

					if(@$row['status'] == 'disable'){
						$msg = "<div style='color:red; font-size:28px; padding-left:350px'>Account is disabled!</div>";
					}
					elseif(@$row['userlevel'] == 'admin'){
						session_start();
						$_SESSION['login'] = true;
						$_SESSION['db'] = $row;
						header("location: admin.php");
					}
					elseif(@$row['userlevel'] == 'user'){
						session_start();
						$_SESSION['loginU'] = true;
						$_SESSION['dbU'] = $row;
						header("location: user.php");
					}
					else{
						$msg = "<div style='color:red; font-size:28px; padding-left:250px'>Incorrect credentials. Please try again!</div>";
					}

					if ($result == false) {
						$msg = "<div style='color:red; font-size:28px; padding-left:250px'>Incorrect credentials. Please try again!</div>";
					}
				}
			?>

			<form action="" method="post" class="box">
				<h1> Log-in Form </h1>
				<h1>
					Username: <br>
					<input type="text" name="username" size="50px" style="text-align: center">
				</h1>
				<h1>
					Password: <br>
					<input type="password" name="password" size="50px" style="text-align: center">
				</h1>
				<br><input type="submit" value="Login" name="login">
			</form>
				<br><?php echo @$msg; ?>


		</div>
	</div>
</body>
</html>