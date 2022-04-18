<?php  
	$nums = new SplFixedArray(10);
	$nums = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');

	function division($nums){
		$quotient = $nums[count($nums)-1];
		for ($i=8; $i >= 0; $i--) { 
			$quotient = $quotient / $nums[$i];
		}
		return $quotient;
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

		th{
			height: 100px;
		}

		.main{
			position: absolute;
			margin-left: 110px;
			padding-left: 110px;
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
			<h1 style="font-size: 40px; "><?php echo "<u>Problem 2</u>"; ?></h1>
			<p style="font-size: 22px; align-self: justify"> 
				<?php echo "<b>2. USING ARRAYS,</b><br><br>"; ?> Create a program using PHP that will contain 10 different numbers and get the sum, difference, product and quotient of all values in the array.
			</p>
			<h1 style="font-weight: lighter;"><?php echo "<u>Output:</u>"; ?></h1>
			<table border="1" cellspacing="10" width="1100px" style="text-align: center;">
				<thead>
					<tr>
						<th colspan="2" style="font-size: 50px">
							Array List:
							<?php  
								foreach ($nums as $num) {
									echo "<u> ".$num." </u>";
								}
							?>
						</th>
					</tr>
				</thead>
				<tbody style="font-size: 22px">
					<tr>
						<td>Addition</td>
						<td width="50%">
							<?php 
								echo array_sum($nums);
							?>
						</td>
					</tr>
					<tr>
						<td>Subtraction</td>
						<td>
							<?php 
								$diff = $nums[0];
								for ($i=1; $i < count($nums); $i++) { 
									$diff -= $nums[$i];
								}
								echo $diff;
							?>
						</td>
					</tr>
					<tr>
						<td>Multiplication</td>
						<td>
							<?php 
								echo array_product($nums);
							?>
						</td>
					</tr>
					<tr>
						<td>Division</td>
						<td>
							<?php 
								echo division($nums);
							?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>