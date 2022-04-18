<?php 
	$datas = array(
		'$info1' => array(
			'photo' => 'photo1.jpg',
			'name' => 'Banana',
			'desc' => 'Color Yellow',
			'facts' => 'Bananas are a healthful addition to a balanced diet, as they provide a range of vital nutrients
			and are a good source of fiber'),

		'$info2' => array(
			'photo' => 'photo2.jpg',
			'name' => 'Apple',
			'desc' => 'Color Red',
			'facts' => 'Apples are among the most popular fruits, and also happen to be incredibly nutritious. They contain a high amount of fiber, vitamin C, potassium and vitamin K. They also provide some B vitamins'),

		'$info3' => array(
			'photo' => 'photo3.jpg',
			'name' => 'Pineapple',
			'desc' => 'Color Yellow',
			'facts' => 'Among the tropical fruits, pineapple is a nutrition superstar. One cup (237 ml) of pineapple provides 131% of the Reference Daily Intake (RDI) for vitamin C and 76% of the RDI for manganese'),

		'$info4' => array(
			'photo' => 'photo4.jpg',
			'name' => 'Blueberries',
			'desc' => 'Color Blue',
			'facts' => 'They have an impressive nutrition profile, being particularly high in fiber, vitamin C, vitamin K and manganese. Blueberries are also exceptionally high in antioxidants. In fact, they are believed to contain the highest antioxidant content of the most commonly consumed fruits'),

		'$info5' => array(
			'photo' => 'photo5.jpg',
			'name' => 'Mango',
			'desc' => 'Color Yellow',
			'facts' => 'Mangoes are an excellent source of vitamin C. They also contain soluble fiber, which can provide many health benefits.'),

		'$info6' => array(
			'photo' => 'photo6.jpg',
			'name' => 'Strawberries',
			'desc' => 'Color Red',
			'facts' => 'Strawberries are highly nutritious. Their vitamin C, manganese, folate and potassium contents are where they really shine. Compared to other fruits, strawberries have a relatively low glycemic index. Eating them shouldn’t cause a big blood sugar spike'),

		'$info7' => array(
			'photo' => 'photo7.jpg',
			'name' => 'Lemons',
			'desc' => 'Color Yellow',
			'facts' => 'Lemons are a very healthy citrus fruit known for their high vitamin C content. They may be particularly helpful in promoting heart health due to their potential to lower blood lipids and blood pressure.'),

		'$info8' => array(
			'photo' => 'photo8.jpg',
			'name' => 'Olives',
			'desc' => 'Color Black',
			'facts' => 'Olives are a good source of vitamin E, iron, copper and calcium. They also provide a lot of antioxidants, which may help prevent heart disease and liver damage, as well as have anti-inflammatory effects.'),

		'$info9' => array(
			'photo' => 'photo9.jpg',
			'name' => 'Oranges',
			'desc' => 'Color Orange',
			'facts' => 'Oranges are one of the most popular and nutritious fruits in the world. Eating one medium orange will provide a significant amount of vitamin C and potassium. They’re also a good source of B vitamins, such as thiamine and folate'),

		'$info10' => array(
			'photo' => 'photo10.jpg',
			'name' => 'Cherries',
			'desc' => 'Color Red',
			'facts' => 'Cherries are rich in nutrients, especially potassium, fiber and vitamin C. They contain antioxidants, including anthocyanins and carotenoids, which reduce inflammation and may help prevent several diseases'),
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
	<title>Technical Problem #2</title>
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

		.head{
			font-weight: bold
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
		<br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 2</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				<b>USING ARRAYS</b>, create a fruit directory that will show the image, name, description and facts about the fruit (create at least10 fruits sort in alphabetical order). Implement a HTML and CSS code for the structure and design of the webpage. Please see the sample output below.
			</p> <hr> <br>
			<table border="1" cellspacing="0" width="1100px">
				<thead>
					<th colspan="4" style="font-size: 38px; padding: 10px">My FRUITS</th>
				</thead>
				<tbody>
					<tr style="font-size: 26px; text-align: center;">
						<td class="head">IMAGE</td>
						<td class="head" width="150px">NAME</td>
						<td class="head" width="150px" style="padding: 5px">DESCRIPTION</td>
						<td class="head">FACTS</td>
					</tr>
					<tr>
						<?php  
							array_sort_by_column($datas, 'name');
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
										if ($key == 'facts') {
											echo "<td style=\"font-size:23px; text-align:justify; padding:10px\">".$value."</td>";
										}
										else{
											echo "<td style=\"font-size:23px; text-align:center\">".$value."</td>";
										}
									}
								}
								echo "</tr>";
							}
						?>
					</tr>	
				</tbody>
			</table>
			<br><br>
		</div>
	</div>