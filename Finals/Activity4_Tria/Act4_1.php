<?php 
	//this is the require() function, change/delete it to see the difference between include() and require()
	//change to require() or include() at line 84
	$story1 = "story1.php"
?>

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
			max-width: 2000px;
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
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Act4_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act4_2.php">Laboratory Problem #2</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="first">
			<br>
			 <table border="1" cellspacing="0" width="1600px">
			 	<thead colspan = "5" style="text-align: center">
			 		<th colspan="6" style="font-size: 30px; font-weight: bolder">5 SHORT STORIES</th>
			 	</thead>
			 	<tbody>
			 		<tr style="text-align: center; font-size: 20px">
			 			<td width="320px" style="font-weight: bold">Story # 1</td>
			 			<td width="320px" style="font-weight: bold">Story # 2</td>
			 			<td width="320px" style="font-weight: bold">Story # 3</td>
			 			<td width="320px" style="font-weight: bold">Story # 4</td>
			 			<td width="320px" style="font-weight: bold">Story # 5</td>
			 		</tr>
			 		<tr style="height: 650px; text-align: justify; font-size: 18px">
			 			<td>
			 				<?php require($story1) ?>
			 			</td>
			 			<td>
			 				<?php include("story2.php") ?>
			 			</td>
			 			<td>
			 				<?php include("story3.php") ?>
			 			</td>
			 			<td>
			 				<?php include("story4.php") ?>
			 			</td>
			 			<td>	
			 				<?php include("story5.php") ?>
			 			</td>
			 		</tr>
			 	</tbody>
			 </table>
			<br>
		</div>
	</div>
	</style>
</body>
</html>