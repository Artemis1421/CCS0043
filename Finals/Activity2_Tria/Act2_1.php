<?php 
	//CHANGE VARIABLES TO DESIRED INPUT
	$input = 1;
	//CHANGE VARIABLES TO DESIRED INPUT

	//CONVERSIONS
	$cmTomm = $input * 10;
	$dmTocm = $input * 10;
	$mTocm = $input * 100;
	$kmTom = $input * 1000;
	$ftoinc = $input * 12;
	$ytoft = $input * 3;
	$chtoy = $input * 22;
	$furtoy = $input * 220;
	$furtoch = $input * 10;
	$mitoyd = $input * 1760;
	$mitofur = $input * 8;
	$mmtoin = $input * 0.03937;
	$cmtoin = $input * 0.39370;
	$mtoin = $input * 39.37008;
	$mtoft = $input * 3.28084;
	$mtoyd = $input * 1.09361;
	$kmtoyd = $input * 1093.6133;
	$kmtomi = $input * 0.62137;
	$intocm = $input * 2.54;
	$fttocm = $input * 30.48;
	$ydtocm = $input * 91.44;
	$ydtom = $input * 0.9144;
	$mitom = $input * 1609.344;
	$mitokm = $input * 1.609344;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Measure Conversion Charts</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
		.content {
	  	max-width: 700px;
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
	<div class="content">
	  	<br> <br> <br> <br><br><br>
	  	<table border="1" cellspacing="0" width="110%" align="center">
	  		<thead>
	  			<tr>
	  				<th colspan="6" style="background-color: yellow">METRIC CONVERTIONS</th>
	  			</tr>
	  		</thead>
	  		<tbody style="background-color: white">
	  			<tr align="left">
	  				<td width="20%">&nbsp;<?php echo ($input." centimetre") ?></td>
	  				<td align="center">=</td>
	  				<td width="37%">&nbsp;<?php echo ($cmTomm." millimetres") ?></td>
	  				<td width="13%">&nbsp;<?php echo ($input." cm") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($cmTomm." mm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." decimetre") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($dmTocm." centimetres") ?></td>
	  				<td>&nbsp;<?php echo ($input." dm") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($dmTocm." cm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." metre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mTocm." centimetres") ?></td>
	  				<td>&nbsp;<?php echo ($input." m") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mTocm." cm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." kilometre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmTom." metres") ?></td>
	  				<td>&nbsp;<?php echo ($input." km") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmTom." m") ?></td>
	  			</tr>
	  		</tbody>
	  	</table>

	  	<br> 
	  	<table border="1" cellspacing="0" width="110%" align="center">
	  		<thead>
	  			<tr>
	  				<th colspan="6" style="background-color: yellow">IMPERIAL CONVERTIONS</th>
	  			</tr>
	  		</thead>
	  		<tbody style="background-color: white">
	  			<tr align="left">
	  				<td width="20%">&nbsp;<?php echo ($input." foot") ?></td>
	  				<td align="center">=</td>
	  				<td width="37%">&nbsp;<?php echo ($ftoinc." inches") ?></td>
	  				<td width="13%">&nbsp;<?php echo ($input." ft") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ftoinc." in") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." yard") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ytoft." feets") ?></td>
	  				<td>&nbsp;<?php echo ($input." yd") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($ytoft." ft") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." chain") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($chtoy." yards") ?></td>
	  				<td>&nbsp;<?php echo ($input." ch") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($chtoy." yd") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." furlong") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($furtoy." yard  (or ".$furtoch." chains)") ?></td>
	  				<td>&nbsp;<?php echo ($input." fur") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($furtoy." yd  (or ".$furtoch." ch)")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." mile") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitoyd." yards  (or ".$mitofur." furlongs)") ?></td>
	  				<td>&nbsp;<?php echo ($input." fur") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitoyd." yd  (or ".$mitofur." fur)")?></td>
	  			</tr>
	  		</tbody>
	  	</table>

	  	<br> 
	  	<table border="1" cellspacing="0" width="110%" align="center">
	  		<thead>
	  			<tr>
	  				<th colspan="6" style="background-color: yellow">METRIC -> IMPERIAL CONVERTIONS</th>
	  			</tr>
	  		</thead>
	  		<tbody style="background-color: white">
	  			<tr align="left">
	  				<td width="20%">&nbsp;<?php echo ($input." millimetre") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td width="37%">&nbsp;<?php echo ($mmtoin." inches") ?></td>
	  				<td width="13%">&nbsp;<?php echo ($input." mm") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($mmtoin." in") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." centimetre") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo (number_format((float)$cmtoin, 5, '.', '')." inches") ?></td>
	  				<td>&nbsp;<?php echo ($input." cm") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo (number_format((float)$cmtoin, 5, '.', '')." in") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." metre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoin." inches") ?></td>
	  				<td>&nbsp;<?php echo ($input." m") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoin." in") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." metre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoft." feet") ?></td>
	  				<td>&nbsp;<?php echo ($input." m") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoft." ft")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." metre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoyd." yards") ?></td>
	  				<td>&nbsp;<?php echo ($input." m") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mtoyd." yd")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." kilometre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmtoyd." yards") ?></td>
	  				<td>&nbsp;<?php echo ($input." km") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmtoyd." yd")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." kilometre") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmtomi." miles") ?></td>
	  				<td>&nbsp;<?php echo ($input." km") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($kmtomi." mi")?></td>
	  			</tr>
	  		</tbody>
	  	</table>
	  	<br>

	  	<table border="1" cellspacing="0" width="110%" align="center">
	  		<thead>
	  			<tr>
	  				<th colspan="6" style="background-color: yellow">IMPERIAL -> METRIC CONVERTIONS</th>
	  			</tr>
	  		</thead>
	  		<tbody style="background-color: white">
	  			<tr align="left">
	  				<td width="20%">&nbsp;<?php echo ($input." inch") ?></td>
	  				<td align="center">=</td>
	  				<td width="37%">&nbsp;<?php echo ($intocm." centimetres") ?></td>
	  				<td width="13%">&nbsp;<?php echo ($input." in") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($intocm." cm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." foot") ?></td>
	  				<td align="center" width="5%">=</td>
	  				<td>&nbsp;<?php echo ($fttocm." centimetres") ?></td>
	  				<td>&nbsp;<?php echo ($input." ft") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($fttocm." cm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." yard") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ydtocm." centimetres") ?></td>
	  				<td>&nbsp;<?php echo ($input." yd") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ydtocm." cm") ?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." yard") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ydtom." metres") ?></td>
	  				<td>&nbsp;<?php echo ($input." yd") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($ydtom." m")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." mile") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitom." metres") ?></td>
	  				<td>&nbsp;<?php echo ($input." mi") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitom." m")?></td>
	  			</tr>
	  			<tr align="left">
	  				<td>&nbsp;<?php echo ($input." mile") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitokm." kilometres") ?></td>
	  				<td>&nbsp;<?php echo ($input." mi") ?></td>
	  				<td align="center">=</td>
	  				<td>&nbsp;<?php echo ($mitokm." km")?></td>
	  			</tr>
	  		</tbody>
	  	</table>
	</div>
</body>
</html>