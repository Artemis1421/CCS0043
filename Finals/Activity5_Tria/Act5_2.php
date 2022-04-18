<?php
	if(isset($_POST['ten'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];

		setcookie("fname",$fname, time() + 10);
		setcookie("mname",$mname, time() + 10);
		setcookie("lname",$lname, time() + 10);

		$msg = "<p style=\"font-size:28px\">Your cookie has been set to 10 seconds</p>";		
	}

	if(isset($_POST['twenty'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];

		setcookie("fname",$fname, time() + 20);
		setcookie("mname",$mname, time() + 20);
		setcookie("lname",$lname, time() + 20);
		$msg = "<p style=\"font-size:28px\">Your cookie has been set to 20 seconds</p>";
	}

	if(isset($_POST['thirty'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];

		setcookie("fname",$fname, time() + 30);
		setcookie("mname",$mname, time() + 30);
		setcookie("lname",$lname, time() + 30);
		$msg = "<p style=\"font-size:28px\">Your cookie has been set to 30 seconds</p>";
	}
?>

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

		input[type="submit"]{
			font-size: 20px;
			width: 120px;
			height: 50px;
			background-color: #CBD2D0;
		}

		input[type="button"]{
			font-size: 20px;
			width: 140px;
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
				<u>PROBLEM # 2</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				2. Create a personal information webpage. Using setcookie() function, create cookies for the firstname, middle name and lastname. It must show the cookies after 10, 20 and 30 seconds.
			</p> <hr>
			<br>

			<form method="post" style="font-size: 30px; padding-left: 325px" >
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
					Cookie Duration:
				</p>
				<input type="submit" name="ten" value="10 Seconds">
				<input type="submit" name="twenty" value="20 Seconds">
				<input type="submit" name="thirty" value="30 Seconds">
				<input type="button" name="cookie" value="View Cookie" id="button">
			</form>
			<?php 
				echo @$msg;
			?>
		</div>
	</div>
</body>
</html>


<script type ="text/javascript">
	document.getElementById("button").onclick = function(){
		location.href = "Act5_2_Cookie.php";
	}
</script>