<?php 
	if (isset($_POST['loginButton'])) {
		$uname = $_POST['uname'];
		$pass = $_POST['pass'];

		include 'config.php';

		$sql = "SELECT * FROM register WHERE uname = '$uname' AND pass = '$pass'";
		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result) == 1){
			$row = mysqli_fetch_array($result);

			session_start();
			$_SESSION['login'] = true;
			$_SESSION['user'] = $row;
			header("location: Tec3_3B.php");
		}
		else{
			$error = "<p style='color:red; font-size:26px; margin-left:225px'>Incorrect Username or Password. Please try again.</p>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #2B</title>
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
			font-weight: bold;
			border-radius: 12px;
		    width: 330px;  height: 50px;
		    text-align: center;
		}

		.box{
			width: 350px;
			height: 350px;
			padding: 50px;
			margin-left: 250px;
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
			<br> <h1> <hr>
				<u>PROBLEM # 2B</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				2. Using your credentials saved in your tables, it will be used to login in the system (create your own login page)include sessions in your webpages.
			</p><hr>
			<p style="font-size: 28px"><b>OUPUT:</b></p>

			<div class="box">
				<h1> Log-in Form </h1>
				<form action="" method="post">
					<h1>
						Username: <br>
						<input type="text" name="uname" size="50px" style="text-align: center">
					</h1>
					<h1>
						Password: <br>
						<input type="password" name="pass" size="51px" style="text-align: center">
					</h1>
					<input type="submit" value="Login" name="loginButton">
				</form>
			</div>
			<?php echo @$error; ?>
			<br><br>
		</div>
	</div>
</body>
</html>