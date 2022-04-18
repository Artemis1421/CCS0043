<?php 
	if(isset($_POST['colors'])){
		$one = $_POST['one'];
		$two = $_POST['two'];
		$three = $_POST['three'];
		$four = $_POST['four'];
		$five = $_POST['five'];
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
				<u>PROBLEM # 3</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				3. Create a webpage that will set a session for your 5 favorite colors and use it to the other webpage. Integrate HTML and CSS, you can create your own design and include images. Please see the example below:
			</p> <hr>
			<br>
			<form action="Act5_3_Result.php" method="post" style="padding-left: 125px">
				<table cellspacing="0" border="1" style="font-size: 32px;" cellpadding="20px" width="800px;">
					<thead>
						<th colspan="2">
							Enter your favorite colors
						</th>
					</thead>
					<tbody>
						<tr>
							<td>Favorite Color 1:</td>
							<td><input type="text" name="one" size="70px"></td>
						</tr>
						<tr>
							<td>Favorite Color 2:</td>
							<td><input type="text" name="two" size="70px"></td>
						</tr>
						<tr>
							<td>Favorite Color 3:</td>
							<td><input type="text" name="three" size="70px"></td>
						</tr>
						<tr>
							<td>Favorite Color 4:</td>
							<td><input type="text" name="four" size="70px"></td>
						</tr>
						<tr>
							<td>Favorite Color 5:</td>
							<td><input type="text" name="five" size="70px"></td>
						</tr>
						<th colspan="2">
							<input type="submit" name="colors" value="Send Colors" style="font-size: 20px; width: 140px; height: 50px; background-color: #CBD2D0">
							<?php 
								session_start();
								$_SESSION['colors'] = true;
							?>
						</th>
					</tbody>
				</table>
			</form>
			<br><br>
		</div>
	</div>
</body>
</html>