<?php 
	$string = " an online guide to html form <input> tag ";
	$arr = array();
	$strings = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #5</title>
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
				<u>PROBLEM # 5</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				<b>CREATION OF STRING FUNCTION IN PHP</b>, <br>
				a. For the final output, apply all the necessary PHP string functions to produce the required result as stated in the next page. Use the variable $stringas the main parameter for the functions. Use HTML table. Do not process if the string is empty. Use var_dump( )for item no. 16 and 17. <br> <br>
				b. For test data, enter the text an online guide to html form <?php echo htmlentities("<input>") ?> tag (with one leading and trailing space). Compare the result below and make sure the output is the same.
			</p> <hr>
			<br> <br>
			<table border="1" cellspacing="0" cellpadding="2" width="1100px">
				<tbody>
					<tr style="font-weight: bold; text-align: center; font-size: 24px; background-color: grey">
						<td>No.</td>
						<td>Description</td>
						<td>Output</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>1.</b></td>
						<td>Original value of $string</td>
						<td>*<?php echo htmlentities($string) ?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>2.</b></td>
						<td>Number of Characters</td>
						<td>*<?php echo strlen($string)?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>3.</b></td>
						<td>Number of Words</td>
						<td>*<?php echo str_word_count($string)?>*</td>
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>4.</b></td>
						<td>First Character to Uppercase</td>
						<td>*<?php echo htmlentities(ucfirst($string));?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px"> 
						<td><b>5.</b></td>
						<td>First Character of Each Word to Uppercase</td>
						<td>*<?php echo htmlentities((ucwords($string)));?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>6.</b></td>
						<td>To lowercase</td>
						<td>*<?php echo htmlentities(strtolower($string))?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>7.</b></td>
						<td>To uppercase</td>
						<td>*<?php echo htmlentities((strtoupper($string)))?>*</td>
					</tr style="background-color: grey">
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>8.</b></td>
						<td>Without Leading Spaces</td>
						<td>*<?php echo htmlentities(ltrim($string))?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>9.</b></td>
						<td>Without Trailing Spaces</td>
						<td>*<?php echo htmlentities(rtrim($string))?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px"> 
						<td><b>10.</b></td>
						<td>Without Leading and Trailing Spaces</td>
						<td>*<?php echo htmlentities(trim($string))?>*</td>
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>11.</b></td>
						<td>MD5 Value of $string</td>
						<td>*<?php echo md5($string)?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>12.</b></td>
						<td>Base64 Value of $string</td>
						<td>*<?php echo base64_encode($string)?>*</td>
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>13.</b></td>
						<td>First 16 Characters</td>
						<td>*<?php echo htmlentities(substr($string, 16))?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>14.</b></td>
						<td>Last 4 Characters</td>
						<td>*<?php echo substr($string, -4)?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>15.</b></td>
						<td>4 Characters Starting From the 20'th Position</td>
						<td>*<?php echo substr($string, 20, 4)?>*</td>
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>16.</b></td>
						<td>Position of the word "guide"</td>
						<td>*int(<?php echo strpos($string, "guide")?>)*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>17.</b></td>
						<td>Position of the word "UE"</td>
						<td>*bool(<?php 
							if(str_contains($string, "UE")){ echo "true";} 
							else{ echo "false";}?>)*</td>	
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>18.</b></td>
						<td>"HTML" word in uppercase</td>
						<td>*<?php echo htmlentities(str_replace("html", "HTML", $string));?>*</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>19.</b></td>
						<td>"&lt;INPUT&gt;"; word in uppercase</td>
						<td>*<?php echo htmlentities(str_replace("input", "INPUT", $string))?>*</td>
					</tr>
					<tr style="background-color: grey">
						<td colspan="3">&nbsp;</td>
					</tr>
					<tr style="text-align: center; font-size: 20px">
						<td><b>20.</b></td>
						<td>Strings converted to array</td>
						<td><?php 
								$str = "an online guide to html form input tag";
								$arr = explode(" ", $str);
								foreach ($arr as $strings) {
									echo "*",$strings,"*<br>";
							}?></td>
					</tr>
				</tbody>
			</table>
			<br><br>
		</div>
	</div>
</body>
</html>