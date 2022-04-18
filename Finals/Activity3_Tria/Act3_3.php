<?php 
	$num1 = 25;
	$num2 = 13;
	$num3 = 6;

	function addition($num1,$num2,$num3){
		return $num1 + $num2 + $num3;
	}

	function subtraction($num1,$num2,$num3){
		return $num1 - $num2 - $num3;
	}

	function multiplication($num1,$num2,$num3){
		return $num1 * $num2 * $num3;
	}

	function division($num1,$num2,$num3){
		return $num1 / $num2 / $num3;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Activity #3</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
		.content{
			max-width: 1100px;
			margin: auto;
			padding-left: 80px;
		}

		.main{
			position: absolute;
			margin-left: 110px;
			padding-left: 110px;
		}

		th{
			height: 100px;
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
		<a href="Act3_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act3_2.php">Laboratory Problem #2</a>
		<br>
		<a href="Act3_3.php">Laboratory Problem #3</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br>
			<h1 style="font-size: 40px; "><?php echo "<u>Problem 3</u>"; ?></h1>
			<p style="font-size: 22px; width: 1100px;"> 
				<b>3. USING USER DEFINED FUNCTION</b><br><br> Create a program that will get the sum, difference, product and quotient of 3 given parameters. Example your_function (param1, param2, param3)
			</p>
			<h1 style="font-weight: lighter;"><?php echo "<u>Output:</u>"; ?></h1>
			<table border="1" cellspacing="10" width="1100px" style="text-align: center;">
				<thead>
					<tr>
						<th colspan="2" style="font-size: 50px">
							Array List:
							<?php  
								echo "<u>".$num1.", ".$num2.", ".$num3." </u>"
							?>
						</th>
					</tr>
				</thead>
				<tbody style="font-size: 22px">
					<tr>
						<td>Addition</td>
						<td width="50%">
							<?php 
								echo addition($num1,$num2,$num3);
							?>
						</td>
					</tr>
					<tr>
						<td>Subtraction</td>
						<td>
							<?php 
								echo subtraction($num1,$num2,$num3);
							?>
						</td>
					</tr>
					<tr>
						<td>Multiplication</td>
						<td>
							<?php 
								echo multiplication($num1,$num2,$num3);
							?>
						</td>
					</tr>
					<tr>
						<td>Division</td>
						<td>
							<?php 
								echo division($num1,$num2,$num3);
							?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>