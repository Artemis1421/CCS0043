<?php 
	$months = array(
		"January", "February", "March", "April", "May", "June", "July", 
		"August", "September", "October", "November", "December");

	$day = array(
		"MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY", "SUNDAY");

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Technical Problem #1</title>
</head>
<body style="background-color: #F0F7EE;">
	<style style="background-color: #F0F7EE">
		.content{
			max-width: 1100px;
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

		.font{
			font-family: 'Times New Roman', serif;
			font-size: 30px;
			font-weight: lighter;
		}

		.days{
			font-size: 22px;
			background-color: black
		}

		.group{
			position: left;
			border: 2px solid black;
			height: 100px;
			padding: 10px;
		}

		.table{
			border-collapse: collapse;
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Tec2.php">Techincal Problem #1</a>
		<br>
		<a href="Tec2_2.php">Techincal Problem #2</a>
		<br>
		<a href="Tec2_3.php">Techincal Problem #3</a>
		<br>
		<a href="Tec2_4.php">Techincal Problem #4</a>
		<br>
		<a href="Tec2_5.php">Techincal Problem #5</a>
		<br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 1</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				<b>USING ARRAYS</b>, create a program using PHP that will display the number of days available for a specific month in a calendar view. Assuming that every month the 1<sup>st</sup> day starts every Monday. Also, the cell of your birthday must be <label style="color: red">RED</label>. Please see sample output below
			</p> <hr> <br>
			<?php
				for ($x = 0; $x <= 11; $x++) { 
					if ($months[$x] == "January" ||
						$months[$x] == "March" ||
						$months[$x] == "May" ||
						$months[$x] == "July" ||
						$months[$x] == "August" ||
						$months[$x] == "October" ||
						$months[$x] == "December") {
						$days = 31;
					}
					elseif ($months[$x] == "February") {
						$days = 28;
					}
					else{
						$days = 30;
					}

					echo "<table class = \"table\" border=\"1\" cellspacing=\"0\" width=\"1100px\">";
					echo "<thead>";
						// echo "<th colspan = \"7\" style=\"text-align: center; font-size: 28px;\">";
							echo "<div class = \"font\">";
							echo "<p style=\"text-align: center\";><u>".strtoupper($months[$x])."&nbsp;&nbsp;2021</u></p>";
							echo "</div>";
						// echo "</th>";
					echo "</thead>";
					echo "<tbody style=\"text-align: center;\">";
					echo "<tr>";
					foreach ($day as $d) {
						echo "<td class = \"days\" style=\"color:white\" width=\"200px\">".$d."</td>";
					}
					echo "</tr>";
					echo "<tr>";		
					for ($i = 1; $i <= $days; $i++) { 
						if ($i == 14 and $months[$x] == "September") {
							echo "<td style=\"font-size: 24px; background-color: #96CDCD\">".$i."</td>";
						}
						else{
							echo "<td height=\"50px\" style=\"font-size: 24px\">".$i."</td>";
						}
						if($i % 7 == 0){
							echo "<tr></tr>";
						}
					}
					echo "</tr>";
					echo "</tbody>";
					echo "</table>";
					echo "<br><br>";
				} 
			?>
		</div>
	</div>
</body>
</html>