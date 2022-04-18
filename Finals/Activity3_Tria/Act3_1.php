<?php
	$datas = array(
		'$info1' => array(
			'number' => '1',
			'name' => 'Patrick Andrew Tria',
			'photo' => 'photo1.jpg',
			'age' => '21',
			'bday' => 'September 14, 1999',
			'contact' => '09201091034'),

		'$info2' => array(
			'number' => '2',
			'name' => 'Jubilee Dizon',
			'photo' => 'photo2.jpg',
			'age' => '21',
			'bday' => 'January 21, 2000',
			'contact' => '09999082183'),

		'$info3' => array(
			'number' => '3',
			'name' => 'Vince Aldrin Cantada',
			'photo' => 'photo3.jpg',
			'age' => '21',
			'bday' => 'June 25, 1999',
			'contact' => '09777477554'),

		'$info4' => array(
			'number' => '4',
			'name' => 'Patriot Anthony Tria',
			'photo' => 'photo4.jpg',
			'age' => '19',
			'bday' => 'April 10, 2001',
			'contact' => '09154592636'),

		'$info5' => array(
			'number' => '5',
			'name' => 'Yashmin Tareno',
			'photo' => 'photo5.jpg',
			'age' => '21',
			'bday' => 'August 13, 1999',
			'contact' => '097433876281'),

		'$info6' => array(
			'number' => '6',
			'name' => 'Alexander Alcantara, Jr.',
			'photo' => 'photo6.jpg',
			'age' => '21',
			'bday' => 'October 10, 1999',
			'contact' => '09667139614'),

		'$info7' => array(
			'number' => '7',
			'name' => 'Sherwin James Cabudoy',
			'photo' => 'photo7.jpg',
			'age' => '21',
			'bday' => 'August 4, 1999',
			'contact' => '09154187121'),

		'$info8' => array(
			'number' => '8',
			'name' => 'Alex Jane Quinones',
			'photo' => 'photo8.jpg',
			'age' => '20',
			'bday' => 'March 27, 2000',
			'contact' => '09669777966'),

		'$info9' => array(
			'number' => '9',
			'name' => 'Kenobi Jedi Ricarte',
			'photo' => 'photo9.jpg',
			'age' => '20',
			'bday' => 'September 23, 2000',
			'contact' => '09491800717'),

		'$info10' => array(
			'number' => '10',
			'name' => 'Restel Justine Tulabot',
			'photo' => 'photo10.jpg',
			'age' => '20',
			'bday' => 'August 3, 2000',
			'contact' => '09667061016'),
	);

	function photoPrint($datas){	
		foreach ($datas as $key => $photo) {
			if ($key == 'photo') {
				echo "<td><img style=\"padding-top:5px\" src=\"$photo\" width=\"125px\" height=\"125px\"></td>";
			}
		}
	}

	function array_sort_by_column(&$arr, $col, $dir = SORT_ASC) {
	    $sort_col = array();
	    foreach ($arr as $key=> $row) {
	        $sort_col[$key] = $row[$col];
	    }

	    array_multisort($sort_col, $dir, $arr);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Activity #3</title>
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
		<a href="Act3_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act3_2.php">Laboratory Problem #2</a>
		<br>
		<a href="Act3_3.php">Laboratory Problem #3</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>
	<div class="main">
		<div class="content">
			<br>
			<h1 style="font-size: 40px; "><?php echo "<u>Problem 1</u>"; ?></h1>
			<p style="font-size: 22px; align-self: justify"> 
				<?php echo "<b>1. USING ARRAYS,</b><br><br>"; ?> Create a program using PHP that will contain 10 different names,  images,  age,  birthday  and  contact  number  then display  it  in alphabetical order(use array sorting), with integration of HTML and CSS.
			</p>
			<h1 style="font-weight: lighter;"><?php echo "<u>Output:</u>"; ?></h1>
			<table border="1" cellspacing="0" width="1100px" style="text-align: center;">
				<tbody>
					<tr style="font-size: 28px">
						<td>No.</td>
						<td>Name</td>
						<td>Image</td>
						<td>Age</td>
						<td>Birthday</td>
						<td>Contact Number</td>
					</tr>
					<tr>
						<?php
						// comment out bottom line for unsorted!
						array_sort_by_column($datas, 'name'); //change second parameter to sort by preferred category (name, age, bday, contact)
							foreach ($datas as $pkey => $parr) 
							{
								echo "<tr>";
								foreach ($parr as $key => $value) 
								{
									if ($key == 'photo') { 
										photoPrint($parr);
									}
									else
									{
										echo "<td style=\"font-size:23px\">".$value."</td>";
									}
								}
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