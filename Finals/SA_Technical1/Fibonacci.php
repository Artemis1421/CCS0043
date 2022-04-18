<?php  
	//CHANGE VARIABLES TO DESIRED INPUT
	$fionacci = 16;
	//CHANGE VARIABLES TO DESIRED INPUT
	
	$first = 1;
	$second = 0;
	$third = 1;
	$temp = "";

	for($i = 0; $i<$fionacci; $i++){
		$third = $first + $second;
		$first = $second;
		$second = $third;
		$temp.= $third.", ";
	}
?>   

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fibonacci Sequence</title>
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
	<div class="content">
	<br><br><br>
	<h1 style="font-size: 50px;font-weight: bolder;color: black; text-decoration: underline;" align="center">Fibonacci Sequence</h1>
	<p style="font-size: 30px; font-weight: bold;">
		Definition:
	</p>
	<p align="justify">
		The Fibonacci sequence is a set of numbers that starts with a one or a zero, followed by a one, and proceeds based on the rule that each number (called a Fibonacci number) is equal to the sum of the preceding two numbers.
	</p>
	<p style="font-size: 30px; font-weight: bold;">
		The Fibonacci of <?php echo $fionacci ?>:
	</p>
	<p style="font-size: 25px;">
		&emsp;&emsp;&emsp;<?php echo substr_replace($temp, " ", -2) ?>
	</p>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<label>
		Source:
	</label>
	<a href="https://whatis.techtarget.com/definition/Fibonacci-sequence">https://whatis.techtarget.com/definition/Fibonacci-sequence</a>
	
	</div>
</body>
</html>