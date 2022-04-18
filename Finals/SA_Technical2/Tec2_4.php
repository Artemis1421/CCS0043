<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #4</title>
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
				<u>PROBLEM # 4</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				<b>USING INCLUDE AND REQUIRE</b>, convert  your  Student  Resume  into  a  web  based  form,  use  include()  and  require() functions to connect all pages. Include and create the following pages:
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Career Objective page
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Personal information page
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Educational Attainment page
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Skills page
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Affiliation page
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;•Work Experience Page
				<br><br>Please see the sample below: 

				<p style="font-size: 30px; text-align: center;">
				<u><b>STUDENT RESUME</b></u>
				</p>
			</p> <hr> <br>

			<span style="margin-right: 600px">
				<img src="photo.jpg" alt="photo" width="155px" height="155px" border="2" style="float: right;">
			</span>
			<p style="font-size: 24px">
				<?php include 'info.html'; ?>
			</p> <hr>

			<h1>
				Career Objective
			</h1> <hr>
			<p style="font-size: 22px">
				<?php include 'careerObj.html'; ?>
			</p> <hr>
			
			<h1>
				Educational Attainment
			</h1> <hr>
			<p style="font-size: 18px"> 
				<?php include 'education.html'; ?>
			</p> <hr>

			<h1>
				Key Skills
			</h1> <hr>
			<p style="font-size: 24px">
				<?php include 'skills.html'; ?>
			</p> <hr>

			<h1>
				Qualifications
			</h1> <hr>
			<p style="font-size: 24px">
				<?php include 'qualifications.html' ?>
			</p> <hr>
			<br><br>
		</div>
	</div>
</body>
</html>