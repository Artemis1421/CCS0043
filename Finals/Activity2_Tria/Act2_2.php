<?php
	//CHANGE VARIABLES TO DESIRED INPUT
	$grade = 92;
	$fName = "Patrick Andrew";
	$mi = "";
	$lastName = "Tria";
	//CHANGE VARIABLES TO DESIRED INPUT

	$rank = "";

	if($grade >= 93 && $grade <= 100) {
		$rank = "A";
	}
	elseif($grade >= 90 && $grade <= 92) {
		$rank = "A-";
	}
	elseif ($grade >= 87 && $grade <= 89) {
		$rank = "B+";
	}
	elseif ($grade >= 83 && $grade <= 86) {
		$rank = "B";
	}
	elseif ($grade >= 80 && $grade <= 82) {
		$rank = "B-";
	}
	elseif ($grade >= 77 && $grade <= 79) {
		$rank = "C+";
	}
	elseif ($grade >= 73 && $grade <= 76) {
		$rank = "C";
	}
	elseif ($grade >= 70 && $grade <= 72) {
		$rank = "C-";
	}
	elseif ($grade >= 67 && $grade <= 69) {
		$rank = "D+";
	}
	elseif ($grade >= 63 && $grade <= 66) {
		$rank = "D";
	}
	elseif ($grade >= 60 && $grade <= 62) {
		$rank = "D-";
	}
	else {
		$rank = "F";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Grade Rankings</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
	.content {
	  max-width: 600px;
	  margin: auto;
	} 

	#nameBorder{
		border: 2px solid black;
		padding: 20px;
		width: 680px;
		align-self: center;
		background-color: white;
	}

	#rankBorder{
		border: 2px solid black;
  		padding: 10px;  
		width: 150px;
		position: relative;
		left: 30px;
		background-color: white;
	}

	#photoBorder{
		border: 2px solid black; 
		position: relative;
		left: 250px;
		bottom: 360px;
		background-color: white;
	}

	.navbar {
		overflow: hidden;
		background-color: #3F612D;
		position: fixed; 
		top: 0%; 
		left: 0%;
		width: 100%; 
	}

	.navbarphoto {
	    position: absolute;
	    right: 5px;
	    top: 0;
	}

	.navbar a {
		float: left;
		display: block;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.navbar a:hover {
		background: #D1D5DE;
		color: black;
	}
	</style>
	<div class="navbar">
		<a href="Act2_1.php"><h3 style="color:#E3B23C">Measure Conversion Charts</h3></a>
		<a href="Act2_2.php"><h3 style="color:#E3B23C">Grade Rankings</h3></a>
	  	<a href="Act2_3.php"><h3 style="color:#E3B23C">2-Digit Decimal Combination</h3></a>
	  	<div class="navbarphoto">
	  		<span></span><img src="logo.png" alt="logo.png" width="70px" height="80px">	
	  	</div>
	</div>

	<div class="content">
		<br><br><br><br>
	  	<h2 div id=nameBorder style="font-size:50px;"><?php echo("Name: ".$fName. " " .$mi. " ".$lastName) ?></h2>
		<h2 div id=rankBorder style="font-size:50px;text-align: center"><?php echo("Rank: ".$rank) ?></h2> 
		<h2 div id=rankBorder style="font-size:50px;text-align: center">Grade: <?php echo($grade) ?></h2>
	  	<img src="photo.jpg" alt="photo" width="420" height="315" div id =photoBorder>
	</div>
	</body> 
</body>
</html>