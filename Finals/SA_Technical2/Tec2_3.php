<?php 
	function printCube(){
		$s = 5;
		$result = $s**3;
		echo "
			<td>CUBE</td>
			<td>s = ".$s."</td>
			<td>V = s&#179;</td>
			<td>".$result."</td>
		";
	}

	function printRRP(){
		$w = 5;
		$h = 5;
		$l = 5;
		$result = $w * $h * $l;
		echo "
			<td>RIGHT RECTANGULAR PRISM</td>
			<td>w = ".$w.", h = ".$h.", l = ".$l."</td>
			<td>V = whl</td>
			<td>".$result."</td>
		";
	}

	function printPrism(){
		$B = 5;
		$h = 5;
		$result = $B * $h;
		echo "
			<td>PRISM</td>
			<td>B = ".$B.", h = ".$h."</td>
			<td>V=Bh</td>
			<td>".$result."</td>
		";
	}

	function printCylinder(){
		$pie = 3.14;
		$r = 5;
		$h = 5;
		$result = 3.14 * $r * $h;
		echo "
			<td>CYLINDER</td>
			<td>π = ".$pie.", r = ".$r.", h =".$h."</td>
			<td>V = πr&#178;h</td>
			<td>".$result."</td>
		";
	}

	function printPyramid(){
		$l = 5;
		$w = 5;
		$h = 5;
		$result = ($l*$w*$h)/3;
		echo "
			<td>PYRAMID</td>
			<td>l = ".$l.", w = ".$w.", h = ".$h."</td>
			<td>V = <sup>lwh</sup><sub>&frasl;3</sub></td>
			<td>".number_format($result,2,'.','')."</td>
		";
	}

	function printCone(){
		$pie = 3.14;
		$r = 5;
		$h = 5;
		$result = $pie*$r**2*($h/3);
		echo "
			<td>CONE</td>
			<td>π = ".$pie.", r = ".$r.", h = ".$h."</td>
			<td>V = πrr&#178;<sup>h</sup>&frasl;<sub>3</sub> 
			<td>".number_format($result,2,'.','')."</td>
		";
	}

	function printSphere(){
		$pie = 3.14;
		$r = 5;
		$result = ((4/3)*$pie*($r**3));
		echo "
			<td>SPHERE</td>
			<td>π = ".$pie.", r = ".$r."</td>
			<td>V = <sup>4</sup>&frasl;<sub>3</sub>πr&#179;</td>
			<td>".number_format($result,2,'.','')."</td>
		";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #3</title>
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
				<u>PROBLEM # 3</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				<b>USING USER DEFINED FUNCTION</b>, create  a  formula  for  each  volume  of  shapes  (Cube,  Right Rectangular Prism, Prism or Cylinder, Pyramid or Cone and Sphere) then display the result. Please see the sample output below.
			</p> <hr>
			<br>
			<p style="font-size: 30px; text-align: center;">
				<u>VOLUME OF SHAPES</u>
			</p>
			<table border="1" cellspacing="0" width="1100px" style="text-align: center;">
				<tbody>
					<tr style="text-align: center; font-size: 28px; font-weight: bold;">
						<td width="300px">SHAPE</td>
						<td>VALUES</td>
						<td>FORMULA</td>
						<td>ANSWER</td>
					</tr>
					<tr height="50px" style="font-size: 24px">
						<?php printCube(); ?>
					</tr>
					<tr height="50px" style="font-size: 24px">
						<?php printRRP(); ?>
					</tr>
					<tr height="50px" style="font-size: 24px">
						<?php printPrism(); ?>
					</tr>
					<tr height="50px" style="font-size: 24px"> 
						<?php printCylinder() ?>
					</tr>
					<tr height="50px" style="font-size: 24px"> 
						<?php printPyramid() ?>
					</tr>
					<tr height="50px" style="font-size: 24px"> 
						<?php printCone() ?>
					</tr>
					<tr height="50px" style="font-size: 24px">
						<?php printSphere() ?>
					</tr>
				</tbody>
			</table>
			<br><br>
		</div>
	</div>
</body>
</html>