<?php 
	if(isset($_POST['saveButton'])){
		$name = $_POST['name'];
		$breed = $_POST['breed'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$color = $_POST['color'];
		$height = $_POST['height'];
		$weight = $_POST['weight'];

		include 'config.php';

		$sql = "INSERT INTO dog(name,breed,age,address,color,height,weight) VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";
		$result = mysqli_query($conn, $sql);

		if($result){
			$msg = "<h2 style='color:green'>Details have been successfully addedd to the database.</h2>";
		}
		else{
			$msg = "<h2 style='color:red'>Error in adding to the database!</h2>";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laboratory Problem #1</title>
</head>
<body style="background-color: #F0F7EE;">
	<style style="background-color: #F0F7EE">
		.content{
			max-width: 1000px;
			margin: auto;
		}

		.main{
			position: absolute;
			margin-left: 150px;
			padding-left: 150px;
		}

		.sidenav {
		 	height: 100%;
		  	width: 200px;
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

		input[type=submit] {
			background-color: gray;
			font-weight: bold;
			border-radius: 12px;
		    width: 100px;  height: 50px;
		}
	</style>

	<div class="sidenav">
	  	<span style="margin-left: 45px"></span><img src="logo.png" alt="logo.png" width="90px" height="110px">	
	  	<br><br>
		<a href="Act6_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act6_2.php">Laboratory Problem #2</a>
		<br>
		<a href="Act6_3.php">Laboratory Problem #3</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<br> <h1> <hr>
				<u>PROBLEM # 1</u>
			</h1>
			<p style="font-size: 28px; text-align: justify;">
				1.	Using MySQL create 10 records for the DOG Information use the following fields Name, Breed, Age, Address, Color, Height and Weight. Integrate HTML, CSS and PHP.
 				Example View of the webpage (DogRegister.php)
			</p> <hr>
			<p style="font-size: 28px"><b>OUPUT:</b></p>

			<form action="" method="post">
				<h1>
					<span style="padding-left: 100px">Name:</span>
					<input type="text" name="name" size="50px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Breed:</span>
					<input type="text" name="breed" size="50px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Age:</span>
					<input type="text" name="age" size="55px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Address:</span>
					<input type="text" name="address" size="45px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Color:</span>
					<input type="text" name="color" size="51px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Height:</span>
					<input type="text" name="height" size="48px" style="text-align: center">
				</h1>
				<h1>
					<span style="padding-left: 100px">Weight:</span>
					<input type="text" name="weight" size="48px" style="text-align: center">
				</h1>
				<br>
				<input type="submit" value="SAVE" name="saveButton" size="50px">
			</form>
			<?php 
				echo @$msg;
			?>
			<br><br>
		</div>
	</div>
</body>
</html>