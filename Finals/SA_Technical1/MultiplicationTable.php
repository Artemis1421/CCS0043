<?php
	$row = 0;
	$col = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multiplication Table</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
	.content {
	  max-width: 800px;
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

		.navbartitle {
			overflow: hidden;
		    position: absolute;
		    right: 100px;
		    top: 0%;
		    padding: 14px 1px;
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
		<a href="StudentRegForm.php"><h3 style="color:#E3B23C">Student Registration Form</h3></a>
		<a href="MultiplicationTable.php"><h3 style="color:#E3B23C">Multiplication Table</h3></a>
	  	<a href="Fibonacci.php"><h3 style="color:#E3B23C">Fibonacci Sequence</h3></a>
	  	<a href="Factorial.php"><h3 style="color:#E3B23C">Factorial Sequence</h3></a>
	  	<div class="navbarphoto">
	  		<span></span><img src="logo.png" alt="logo.png" width="70px" height="80px">	
	  	</div>
	  	<div class="navbartitle">
	  		<span><h3 style="color:#E3B23C">SA1 - Techincal</h3></span>
	  	</div>
	</div>
	<br><br><br><br><br><br>
	<div class = "content">
		<table border="1" cellspacing="0" width="120%" align="center" style="font-size: 25px">
			<thead colspan = "10">
				<th style="font-size: 50px;font-weight: bolder;color: black; text-decoration: underline;" align="center">MULTIPLICATION TABLE</th>
			</thead>
			<tbody>
				<?php
				echo "<table border =\"1\" cellspacing=\"5\" width=\"120%\" style=\"font-size: 23px\">";
					for ($row=0; $row <= 10; $row++) { 
						echo "<tr> \n";
						for ($col=0; $col <= 10; $col++) { 
							if(($row+$col)%2 == 0){
								$p = $col * $row;
						    	echo "<td align=\"center\" style=\"background-color:red\" width=\"50\">$p</td> \n";
							}
							else{
								$p = $col * $row;
						    	echo "<td align=\"center\" style=\"background-color:yellow\">$p</td> \n";
							}
						}
					  	echo "</tr>";
					}
				echo "</table>";
				?>
			</tbody>
		</table>
	</div>
</body>
</html>