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

		.box{
			width: 400px;
			height: 450px;
			padding: 50px;
			margin-left: 250px;
			border: 1px solid black;
		}

		@media screen and (max-height: 450px) {
		  	.sidenav {padding-top: 15px;}
		  	.sidenav a {font-size: 18px;}
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Act6_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act6_2.php">Laboratory Problem #2</a>
		<br>
		<a href="Act6_3.php">Laboratory Problem #3</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 2</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				2.	Create separate webpage to show all record of the dog. Please see the example below (DogView.php):
			</p> <hr>
			<p style="font-size: 28px"><b>OUPUT:</b></p>

			<?php 
				include 'config.php';

				$sql = "SELECT * FROM dog";
				$result = mysqli_query($conn, $sql);

				if ($result->num_rows > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<h1 style='text-align:center'>D O G " . $row['id'] . "</h1>";
						echo "<div class='box' style='font-size:25px'>";
						echo "<p><b>Name:</b> " . $row['name'] ."</p>";
						echo "<p><b>Breed:</b> " . $row['breed'] . "</p>";
						echo "<p><b>Age:</b> " . $row['age'] . "</p>";
						echo "<p><b>Address:</b> " . $row['address'] . "</p>";
						echo "<p><b>Color:</b> " . $row['color'] . "</p>";
						echo "<p><b>Height:</b> " . $row['height'] . "</p>";
						echo "<p><b>Weight:</b> " . $row['weight'] . "</p>";
						echo "</div>";
						echo "<br>";
					}
				}

				
			?>
		</div>
	</div>
</body>
</html>