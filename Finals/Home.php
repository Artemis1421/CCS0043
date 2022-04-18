<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Menu</title>
</head>

<script>
$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();

      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        window.location.hash = hash;
      });
    }
  });
});
</script>

<body style="background-color: #F0F7EE;">
	<style>
		html{
			scroll-behavior: smooth;
		}

		.content{
			max-width: 900px;
			margin: auto;
		}

		.main{
			position: absolute;
			margin-left: 150px;
			padding-left: 150px;
		}

		.photoBorder{
			border: 1px solid black;
		}

		.sidenav {
		 	height: 100%;
		  	width: 180px;
		  	position: fixed;
		  	z-index: 1;
		  	top: 0;
		  	left: 0;
		  	background-color: #3F612D;
		  	overflow-y: hidden;
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

		.sidenavR {
		 	height: 100%;
		  	width: 190px;
		  	position: fixed;
		  	z-index: 1;
		  	top: 0;
		  	right: 0;
		  	background-color: #3F612D;
		  	overflow-x: hidden;
		  	padding-top: 20px;
		}

		.sidenavR a {
		  	padding: 16px 16px 6px 32px;
		  	text-decoration: none;
		  	font-size: 25px;
		  	color: #f2f2f2;
		  	display: block;
		  	text-align: justify;
		}

		.sidenavR a:hover {
		  	color: #D1D5DE;
		}

		@media screen and (max-height: 450px) {
		  	.sidenavR {padding-top: 15px;}
		  	.sidenavR a {font-size: 18px;}
		}
	</style>

	<div class="sidenav">
		<span style="margin-left: 30px"></span><img src="logo.png" alt="logo.png" width="115px" height="130px">	
		<a href="#home">Home</a>
		<a href="#lab1" style="margin-left: 15px;">Laboratory Activities</a>
		<a href="#tec1" style="margin-left: 15px;">Summative Techincals</a>
		<a href="">About Me</a>
		<a href="">Contact Me</a>
	</div>

	<div class="sidenavR">
	  	<a style="color: black; font-weight: bolder; background-color: #5B8C40; padding-top: 10px; padding-bottom: 10px;">Laboratory Activities</a>
		<a href="/ccs0043/Activity1_Tria/resume.php">Laboratory Activity #1</a>
		<br>
		<a href="/ccs0043/Activity2_Tria/Act2_1.php">Laboratory Activity #2</a>
		<br>
		<a href="/ccs0043/Activity3_Tria/Act3_1.php">Laboratory Activity #3</a>
		<br>
		<a href="/ccs0043/Activity4_Tria/Act4_1.php">Laboratory Activity #4</a>
		<br>
		<a href="/ccs0043/Activity5_Tria/Act5_1.php">Laboratory Activity #5</a>
		<br>
		<a href="/ccs0043/Activity6_Tria/Act6_1.php">Laboratory Activity #6</a>
		<br>
		<a href="/ccs0043/Activity7_Tria/Act7_1.php">Laboratory Activity #7</a>
		<br>
		<a style="color: black; font-weight: bolder; background-color: #5B8C40; padding-top: 10px; padding-bottom: 10px;">Summative Technicals</a>
		<br>
		<a href="/ccs0043/SA_Technical1/StudentRegForm.php">Summative Techincal #1</a>
		<br>
		<a href="/ccs0043/SA_Technical2/Tec2.php">Summative Techincal #2</a>
		<br>
		<a href="/ccs0043/SA_Technical3/Tec3A.php">Summative Techincal #3</a>
		<br>
		<a href="">Summative Techincal #4</a>
		<br><br><br>
	</div>

	<div class="main">
		<div class="content">
			<br>
			<span id="home" style="font-size: 20px;"><h1 align="center">APPLICATIONS DEVELOPMENT AND EMERGING TECHNOLOGIES</h1></span>
			<span style="font-size: 20px;"><p align="center">CCS0043</p></span>
			<hr>
			<p style="font-size: 18px" align="justify">This course introduces the students to the development of applications using web, mobile, and emerging technologies with emphasis on requirements management, interface design, usability, testing, deployment, including ethical and legal considerations.</p>
			<hr>
			<p id="lab1" style="font-size: 22px; font-weight: bold;" align="center">LABORATORY ACTITIVIES OUTPUT <br><br> Laboratory Activity #1</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct1.png" alt="/ccs0043/Menu/labAct1.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #2</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct2.png" alt="/ccs0043/Menu/labAct2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct2_2.png" alt="/ccs0043/Menu/labAct2_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct2_3.png" alt="/ccs0043/Menu/labAct2_3.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #3</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct3.png" alt="/ccs0043/Menu/labAct3.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct3_2.png" alt="/ccs0043/Menu/labAct3_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct3_3.png" alt="/ccs0043/Menu/labAct3_3.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #4</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct4.png" alt="/ccs0043/Menu/labAct4.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct4_2.png" alt="/ccs0043/Menu/labAct4_2.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #5</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct5.png" alt="/ccs0043/Menu/labAct5.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct5_2.png" alt="/ccs0043/Menu/labAct5_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct5_3.png" alt="/ccs0043/Menu/labAct5_3.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #6</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct6.png" alt="/ccs0043/Menu/labAct6.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct6_2.png" alt="/ccs0043/Menu/labAct6_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct6_3.png" alt="/ccs0043/Menu/labAct6_3.png" width="900px">
			<br><br><hr>
			<p style="font-size: 22px; font-weight: bold;" align="center">Laboratory Activity #7</p>
			<img class="photoBorder" src="/ccs0043/Menu/labAct7.png" alt="/ccs0043/Menu/labAct7.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct7_1.png" alt="/ccs0043/Menu/labAct7_1.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct7_2.png" alt="/ccs0043/Menu/labAct7_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct7_3.png" alt="/ccs0043/Menu/labAct7_3.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labAct7_4.png" alt="/ccs0043/Menu/labAct7_4.png" width="900px">
			<br><br><hr>


			<!-- input more lab outputs -->
			<p id="tec1" style="font-size: 22px; font-weight: bold;" align="center">SUMMATIVE TECHINCALS OUTPUT <br><br> Summative Technical #1</p>
			<img class="photoBorder" src="/ccs0043/Menu/labSum1.png" alt="/ccs0043/Menu/labSum1.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum1_2.png" alt="/ccs0043/Menu/labSum1_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum1_3.png" alt="/ccs0043/Menu/labSum1_3.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum1_4.png" alt="/ccs0043/Menu/labSum1_4.png" width="900px">
			<br><br><hr>
			<p id="tec1" style="font-size: 22px; font-weight: bold;" align="center">Summative Technical #2</p>
			<img class="photoBorder" src="/ccs0043/Menu/labSum2.png" alt="/ccs0043/Menu/labSum2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum2_2.png" alt="/ccs0043/Menu/labSum2_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum2_3.png" alt="/ccs0043/Menu/labSum2_3.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum2_4.png" alt="/ccs0043/Menu/labSum2_4.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum2_5.png" alt="/ccs0043/Menu/labSum2_5.png" width="900px">
			<br><br><hr>
			<p id="tec1" style="font-size: 22px; font-weight: bold;" align="center">Summative Technical #3</p>
			<img class="photoBorder" src="/ccs0043/Menu/labSum3.png" alt="/ccs0043/Menu/labSum2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_2.png" alt="/ccs0043/Menu/labSum2_2.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_3.png" alt="/ccs0043/Menu/labSum2_3.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_4.png" alt="/ccs0043/Menu/labSum2_4.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_5.png" alt="/ccs0043/Menu/labSum2_5.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_6.png" alt="/ccs0043/Menu/labSum2_5.png" width="900px">
			<img class="photoBorder" src="/ccs0043/Menu/labSum3_7.png" alt="/ccs0043/Menu/labSum2_5.png" width="900px">
			<br><br><br>

			<!-- input more summative outputs -->
		</div>
	</div>
</body>
</html>