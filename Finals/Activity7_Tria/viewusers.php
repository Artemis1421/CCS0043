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
		<a href="Act7_1.php">Laboratory Problem #1</a>
		<br>
		<a href="Act7_2.php">Laboratory Problem #2</a>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<a href="../home.php">Main Menu</a>
	</div>

	<div class="main">
		<div class="content">
			<?php 
				include "config.php";
				session_start();

				if (!isset($_SESSION['login'])) {
					header("location: logout.php");
				}

				$query = "SELECT * FROM register";
				$result = mysqli_query($conn, $query);
			?>
			<br><br>
			<table border="1" cellspacing="0" cellpadding="20px">
				<thead>
					<tr>
						<td width="20px">ID</td>
						<td width="200px">Email</td>
						<td width="120px">Username</td>
						<td width="120px">Password</td>
						<td width="120px">Userlevel</td>
						<td width="120px">Status</td>
						<td width="120px">Image</td>
					</tr>
				</thead>
				<tbody>
					<?php 
						$id = 1;
						while ($row = mysqli_fetch_array($result)) {
							echo "<tr><td>" . $id . "</td><td>" . $row['email'] . "</td><td>" . $row['username'] . "</td><td>" . $row['password'] . "</td><td>" . $row['userlevel'] . "</td><td>" . $row['status'] . "</td><td>" . $row['image'] . "</td></tr>";
						$id++;
						}
					?>
				</tbody>
			</table><br>
			<div>
					<a href="admin.php">Back</a> <br>
			</div>
		</div>
	</div>
</body>
</html>