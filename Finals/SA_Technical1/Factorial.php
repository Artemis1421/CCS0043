<?php 
	//CHANGE VARIABLES TO DESIRED INPUT
	$num = 5; 
	//CHANGE VARIABLES TO DESIRED INPUT
	
    $factorial = 1;  
    $factors = 0;

    for ($x=$num; $x>=1; $x--)   {  
      $factorial = $factorial * $x;  
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Factorial</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
		.content{
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
	<br><br><br>
	<div class="content">
	  	<h1 style="font-size: 50px;font-weight: bolder;color: black; text-decoration: underline;" align="center">Factorial</h1>
	  	<p style="font-size: 30px; font-weight: bold;">
	  		Definition:
	  	</p>
	  	<p align="justify">
	  		Factorial, in mathematics, the product of all positive integers less than or equal to a given positive integer and denoted by that integer and an exclamation point. Thus, factorial seven is written 7!, meaning 1 × 2 × 3 × 4 × 5 × 6 × 7.
	  	</p>
	  	<p align="justify">
	  		Factorials are commonly encountered in the evaluation of permutations and combinations and in the coefficients of terms of binomial expansions. Factorials have been generalized to include nonintegral values.
	  	</p>
	  	<p style="font-size: 30px; font-weight: bold;">
			The Factorial of <?php echo $num ?>:
		</p>
		<p style="text-align: center; font-size: 22px;">
	  		<?php echo $num?>!= <?php for ($y=$num; $y>=2; $y--){ echo "$y * "; }?> 1
	  	</p>
		<p style="font-size: 25px; font-weight: bold;" align="center">
			<?php echo $factorial ?>
		</p>
		<br><br><br><br><br><br><br><br><br>
		<label>
			Source: 
		</label>
		<a href="https://www.britannica.com/science/factorial">https://www.britannica.com/science/factorial</a>
	</div>
</body>
</html>