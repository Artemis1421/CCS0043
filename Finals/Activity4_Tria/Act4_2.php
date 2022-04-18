<?php  
	$names = array(
		"patrick", "james", "alexander", "jane", "tulabot", "cantada", "ricarte", "andrei", "yashmin", "paul",
		"anthony", "patriot", "patricia", "ryan", "andrew", "alexa", "aevan", "satparam", "annette", "mae"
	)
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #2</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
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
		<a href="Act4_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act4_2.php">Laboratory Problem #2</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br>
			<table border="1" cellpadding="2" width="1100px" style="text-align: center;">
				<thead>
					<th colspan="6" style="font-size: 30px; font-weight: bolder">LIST OF NAMES</th>
				</thead>
				<tbody>
					<tr style="font-size: 23px; font-weight: bold;">
						<td width="150px">Name</td>
						<td width="120px">Number of Characters</td>
						<td>Uppercase First Character</td>
						<td>Replace Vowels with @</td>
						<td width="180x">Check position of character "a"</td>
						<td width="150px">Reverse Name</td>
					</tr>
					<tr>
						<?php 
							foreach ($names as $outName) {
								echo "<tr>";
								echo "<td style=\"font-size:23px\">".$outName."</td>";
								echo "<td style=\"font-size:23px\">".strlen($outName)."</td>";
								echo "<td style=\"font-size:23px\">".ucwords($outName)."</td>";
								echo "<td style=\"font-size:23px\">".str_replace('a', '@', $outName)."</td>";
								echo "<td style=\"font-size:23px\">".strpos($outName, 'a')."</td>";
								echo "<td style=\"font-size:23px\">".strrev($outName)."</td>";
								echo "</tr>";
							}
						?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>