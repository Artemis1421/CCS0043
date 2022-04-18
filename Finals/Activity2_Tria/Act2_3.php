<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>2-Digit Decimal Combination</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
	.content {
	  max-width: 600px;
	  margin: auto;
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
	<br><br><br>
	<div class="content">
	  	<br> <br> <br>
	  	<p style="font-size: 25px">
		  	<?php 
				for($i = 0; $i <= 9; $i++){
	    			for($j = 0; $j <= 9; $j++){
	        			echo $i.$j.", ";
	    			}
				}
			?>
	  	</p>
	</div>
</body>
</html>