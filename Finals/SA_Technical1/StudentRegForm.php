<?php 
	//CHANGE VARIABLES TO DESIRED INPUT
	$adminInitial = "Mr. John Doe";
	$date = "01/28/2021";
	$studNum = "201811276";
	$course = "Bachelor of Science in Computer Science Specialized in Software Engineering";
	$class = "TN31A";
	$entryDate = "01/28/2021";
	$entryType = "Regular";
	$grade = "A+";
	$lastName = "Tria";
	$firstName = "Patrick Andrew";
	$midName = "N/A";
	$year = "1999";
	$month = "09";
	$day = "14";
	$siblings = "Patricia Ann Joy Tria, Patriot Anthony Tria";
	$prevSchoolBoard = "AMA Computer College Fairview Campus";
	$lastDate = "11/22/2019";
	$prevSchool = "AMA Computer College Fairview Campus";
	$gradePrevSchool = "Testing TBA";
	$waterSchool = "";
	$waterSchool1 = "";
	$waterSchool2 = "";
	$waterSchool3 = "";
	$medicalCondition = "None as of the moment.";
	$birthCountry = "Philippines";
	$ifPhil = "Metro Manila";
	$citizenship = "Filipino";
	$canadaYear = "";
	$canadaMonth = "";
	$canadaDay = "";
	$ifNotPhilYear = "";
	$ifNotPhilMonth = "";
	$ifNotPhilDay = "";
	$otherStatus = "";
	//CHANGE VARIABLES TO DESIRED INPUT
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Registration Form</title>
</head>
<body style="background-color: #F0F7EE">
	<style>
		.content{
			max-width: 800px;
			margin: auto;
		}

		.studentBorder{
			background-color: black; 
			color: white; 
			padding: 5px; 
		}

		.hiddenBorder{
			border-top: none;
			border-left: none;
			border-right: none; 
			border-color: black;
			pointer-events: none;
			text-align: center;
			background-color: #F0F7EE;
		}

		.medicalBorder{
			border-top: none;
			border-left: none;
			border-right: none; 
			border-color: black;
			pointer-events: none;
			text-align: left;
			padding-left: 30px;
			background-color: #F0F7EE;
		}

		.firstGroup{
			position: left;
			border: 2px solid black;
			height: 100px;
			padding: 10px;
		}

		.secondGroup{
			position: left;
			border: 2px solid black;
			width: 67%;
			height: 20px;
			padding: 10px;
		}

		.thirdGroup{
			position: left;
			border: 2px solid black;
			height: 200px;
			padding: 10px;			
		}

		.fourthGroup{
			position: left;
			border: 2px solid black;
			height: 20px;
			padding: 10px;	
		}

		.fifthGroup{
			position: left;
			border: 2px solid black;
			height: 230px;
			padding: 10px;
		}

		.sixthGroup{
			position: left;
			border: 2px solid black;
			height: 160px;
			padding: 10px;
		}

		.seventhGroup{
			position: left;
			border: 2px solid black;
			height: 255px;
			padding: 10px;
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

		.navbartitle {
			overflow: hidden;
		    position: absolute;
		    right: 100px;
		    top: 0%;
		    padding: 14px 1px;
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
		<a href="StudentRegForm.php"><h3 style="color:#E3B23C">Student Registration Form</h3></a>
		<a href="MultiplicationTable.php"><h3 style="color:#E3B23C">Multiplication Table</h3></a>
	  	<a href="Fibonacci.php"><h3 style="color:#E3B23C">Fibonacci Sequence</h3></a>
	  	<a href="Factorial.php"><h3 style="color:#E3B23C">Factorial Sequence</h3></a>
	  	<div class="navbarphoto">
	  		<span></span><img src="logo.png" alt="logo.png" width="70px" height="80px">	
	  	</div>
	  	<div class="navbartitle">
	  		<span><h3 style="color:#E3B23C">SA1 - Techincal</h3></span>
	  	</div>
	</div>
	<br><br><br>
	<div class="content">
	  	<br>
	  	<div>
	  		<h1 style="font-size: 50px;font-weight: bolder;color: black; text-decoration: underline;" align="center">Student Registration Form</h1>
	  	</div>
	  	<p class="firstGroup">
	  		<?php echo "<i>For School Use</i> <b>- Permission to Register: </b>
	  					<input type=\"adminInitial\" 
	  					id=\"adminInitial\" 
	  					name=\"adminInitial\" 
	  					value=\"$adminInitial\" 
	  					maxlength=\"9\" 
	  					style=\"width: 100px\" 
	  					class=\"hiddenBorder\"> <b>
	  					Date: </b><input type=\"text\" 
	  				    		id=\"date\" 
	  				    		name=\"date\" 
	  				    		value=\"$date\" 
	  				    		maxlength=\"9\" 
	  				    		style=\"width: 90px\" 
	  				   			class=\"hiddenBorder\">" ?>
	  		 <label class="container">ESL
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">SPED
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">IPRC
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">ISA
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
	  		<br><br>
	  		<?php echo "Student Number: <input type=\"text\" 
	  									id=\"studNum\" 
	  									name=\"studNum\" 
	  									value=\"$studNum\" 
	  									maxlength=\"9\" 
	  									style=\"width: 150px\" 
	  									class=\"hiddenBorder\"> 
	  				    Entry Date: <input type=\"text\" 
	  				    			id=\"entryDate\" 
	  				    			name=\"entryDate\" 
	  				    			value=\"$entryDate\" 
	  				    			maxlength=\"9\" 
	  				    			style=\"width: 120px\" 
	  				   				class=\"hiddenBorder\"> 
	  					Entry Type: <input type=\"text\" 
	  				    			id=\"entryType\" 
	  				    			name=\"entryType\" 
	  				    			value=\"$entryType\" 
	  				    			maxlength=\"9\" 
	  				    			style=\"width: 120px\" 
	  				   				class=\"hiddenBorder\">
	  				   	Grade: <input type=\"text\" 
	  				    		id=\"grade\" 
	  				    		name=\"grade\" 
	  				    		value=\"$grade\" 
	  				    		maxlength=\"9\" 
	  				    		style=\"width: 46px\" 
	  				   			class=\"hiddenBorder\"" ?>
	  		<br><br><br>
	  		<?php echo "Course: <input type=\"text\" 
	  							id=\"course\" 
	  							name=\"course\" 
	  							value=\"$course\" 
	  							maxlength=\"15\" 
	  							style=\"width: 525px\" 
	  							class=\"hiddenBorder\"> 

	  					Section/Class: <input type=\"text\" 
	  				    				id=\"class\" 
	  				    				name=\"class\" 
	  				    				value=\"$class\" 
	  				    				maxlength=\"9\" 
	  				    				style=\"width: 92px\" 
	  				   					class=\"hiddenBorder\">" ?>
	  	</p>
	  	<p class="secondGroup">
	  		Is the student currently expelled from any school or school board? 
		  		<label class="container">Yes
				  <input type="radio" name="yesorno">
				  <span class="checkmark"></span>
				</label>
				<label class="container">No
				  <input type="radio" name="yesorno">
				  <span class="checkmark"></span>
				</label>
	  	</p>
	  	<p class="thirdGroup">
	  		<label class="studentBorder">
	  			Student Information
	  		</label>
	  		<br><br>
	  		Full Legal Name:
	  		<?php echo "<input type=\"text\" 
	  					id=\"lastName\" 
	  					name=\"lastName\" 
	  					value=\"$lastName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 210px\" 
	  					class=\"hiddenBorder\">

	  					<input type=\"text\" 
	  					id=\"firstName\" 
	  					name=\"firstName\" 
	  					value=\"$firstName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 210px\" 
	  					class=\"hiddenBorder\">

	  					<input type=\"text\" 
	  					id=\"midName\" 
	  					name=\"midName\" 
	  					value=\"$midName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 225px\" 
	  					class=\"hiddenBorder\">"; ?>
	  		<br>
	  		<label style="font-size: 12px">
	  		<?php echo "<span style=\"margin-left:200px\"> Last Name</span> 
	  					<span style=\"margin-left:150px\">First Name</span>
	  					<span style=\"margin-left:170px\">Middle Name</span>" ?>
	  		</label>
	  		<br><br>
	  		<?php echo "Preferred Name: 
	  					<input type=\"text\" 
	  					id=\"lastName\" 
	  					name=\"lastName\" 
	  					value=\"$lastName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 215px\" 
	  					class=\"hiddenBorder\">

	  					<input type=\"text\" 
	  					id=\"firstName\" 
	  					name=\"firstName\" 
	  					value=\"$firstName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 215px\" 
	  					class=\"hiddenBorder\">

	  					<input type=\"text\" 
	  					id=\"midName\" 
	  					name=\"midName\" 
	  					value=\"$midName\" 
	  					maxlength=\"15\" 
	  					style=\"width: 221px\" 
	  					class=\"hiddenBorder\">"; ?>
	  		<br>
	  		<label style="font-size: 12px">
	  		<?php echo "<span style=\"margin-left:200px\"> Last Name</span> 
	  					<span style=\"margin-left:150px\">First Name</span>
	  					<span style=\"margin-left:170px\">Middle Name</span>" ?>
	  		</label>
	  		<br><br>
	  		Gender:
	  		<label class="container">Male
				 <input type="radio" name="gender">
				 <span class="checkmark"></span>
			</label>
			<label class="container">Female
				 <input type="radio" name="gender">
				 <span class="checkmark"></span>
			</label>
				<?php echo "&emsp;Date of Birth: 
							<input type=\"text\" 
	  						id=\"year\" 
	  						name=\"year\" 
	  						value=\"$year\" 
	  						maxlength=\"15\" 
	  						style=\"width: 30px\" 
	  						class=\"hiddenBorder\">
							
							<input type=\"text\" 
	  						id=\"month\" 
	  						name=\"month\" 
	  						value=\"$month\" 
	  						maxlength=\"15\" 
	  						style=\"width: 30px\" 
	  						class=\"hiddenBorder\"> 

	  						<input type=\"text\" 
	  						id=\"day\" 
	  						name=\"day\" 
	  						value=\"$day\" 
	  						maxlength=\"15\" 
	  						style=\"width: 30px\" 
	  						class=\"hiddenBorder\">"; ?>
			<label style="font-size: 13px">
				<?php echo "&emsp; If the student has other siblings in this school, please list them:"; ?>
			</label>
			<br>
			<label style="font-size: 12px">
			<?php echo "<span style=\"margin-left:308px\">Year &nbsp;Month &nbsp;&nbsp;&nbspDay</span>" ?>
	  		<?php echo "<span style=\"margin-left:50px\"</span>
	  					<input type=\"text\" 
	  					id=\"siblings\" 
	  					name=\"siblings\" 
	  					value=\"$siblings\"
	  					maxlength=\"30\" 
	  					style=\"width: 315px\" 
	  					class=\"hiddenBorder\">"; ?>
	  		</label>
	  	</p>
	  	<p class="fourthGroup" style="font-size: 10px">
	  		<?php echo "<i>For School Use</i> <b>- Proof of Birth:</b>"; ?>
	  		<label class="container">Copy in OSR
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Baptismal Record
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Birth Registration
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Birth Certificate
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Immigration Papers/Card
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Passport
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Other
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
	  	</p>
	  	<p class="fifthGroup">
	  		<label class="studentBorder">
	  			Previous School Information
	  		</label>
	  		<br><br>
	  		Name of Previous School Board:
	  		<?php echo "<input type=\"text\" 
	  					id=\"prevSchoolBoard\" 
	  					name=\"prevSchoolBoard\" 
	  					value=\"$prevSchoolBoard\" 
	  					maxlength=\"30\" 
	  					style=\"width: 320px\" 
	  					class=\"hiddenBorder\">" ?>
	  		Last date attended:
	  		<?php echo "<input type=\"text\" 
	  					id=\"lastDate\" 
	  					name=\"lastDate\" 
	  					value=\"$lastDate\" 
	  					maxlength=\"30\" 
	  					style=\"width: 107px\" 
	  					class=\"hiddenBorder\">" ?>
	  		<br><br>
	  		Name of Previous School:
	  		<?php echo "<input type=\"text\" 
	  					id=\"prevSchool\" 
	  					name=\"prevSchool\" 
	  					value=\"$prevSchool\" 
	  					maxlength=\"50\" 
	  					style=\"width: 300px\" 
	  					class=\"hiddenBorder\">" ?>
	  		Grade at Previous School: 
	  		<?php echo "<input type=\"text\" 
	  					id=\"gradePrevSchool\" 
	  					name=\"gradePrevSchool\" 
	  					value=\"$gradePrevSchool\" 
	  					maxlength=\"50\" 
	  					style=\"width: 124px\" 
	  					class=\"hiddenBorder\">" ?>
	  		<br><br>
	  		Language of Instruction:
	  		<label class="container">English
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Filipino
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Other
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<br><br>
			<label style="font-weight: bold; font-size: 15px">
				Did the student ever attend a Waterloo Region District Board school in the past?
			</label>
			</label>
			<label class="container">Yes
				 <input type="radio" name="yesornowater">
				 <span class="checkmark"></span>
			</label>
			<label class="container">No
				 <input type="radio" name="yesornowater">
				 <span class="checkmark"></span>
			</label>
			If yes, name school(s):
			<br><br>
			<?php echo "<input type=\"text\" 
	  					id=\"waterSchool\" 
	  					name=\"waterSchool\" 
	  					value=\"$waterSchool\" 
	  					maxlength=\"50\" 
	  					style=\"width: 190px\" 
	  					class=\"hiddenBorder\">" ?>
	  		<?php echo "<input type=\"text\" 
	  					id=\"waterSchool1\" 
	  					name=\"waterSchool1\" 
	  					value=\"$waterSchool1\" 
	  					maxlength=\"50\" 
	  					style=\"width: 190px\" 
	  					class=\"hiddenBorder\">" ?>
	  		<?php echo "<input type=\"text\" 
	  					id=\"waterSchool2\" 
	  					name=\"waterSchool2\" 
	  					value=\"$waterSchool2\" 
	  					maxlength=\"50\" 
	  					style=\"width: 190px\" 
	  					class=\"hiddenBorder\">" ?>
	  		<?php echo "<input type=\"text\" 
	  					id=\"waterSchool3\" 
	  					name=\"waterSchool3\" 
	  					value=\"$waterSchool3\" 
	  					maxlength=\"50\" 
	  					style=\"width: 180px\" 
	  					class=\"hiddenBorder\">" ?>
	  	</p>
	  	<p class="sixthGroup">
	  		<label class="studentBorder">
	  			Health Information
	  		</label>
	  		<br><br>
	  		Medical Conditions (include information on special equipment or medication, if required):
	  		<br><br>
	  		<?php echo "<input type=\"text\" 
	  					id=\"medicalCondition\" 
	  					name=\"medicalCondition\" 
	  					value=\"$medicalCondition\" 
	  					maxlength=\"300\" 
	  					style=\"width: 740px\" 
	  					class=\"medicalBorder\">" ?>
	  		<br><br>
	  		<?php echo "<b>For School Use</b> <br> Immunization Record Provided:"?>
	  		<label class="container">Yes
			  <input type="radio" name="yesornoimmune">
			  <span class="checkmark"></span>
			</label>
			<label class="container">No
			  <input type="radio" name="yesornoimmune">
			  <span class="checkmark"></span>
			</label>
			<span style="margin-left: 120px">
				Does the student require an epi-pen?
			</span>
			<label class="container">Yes
			  <input type="radio" name="yesornoepi">
			  <span class="checkmark"></span>
			</label>
			<label class="container">No
			  <input type="radio" name="yesornoepi">
			  <span class="checkmark"></span>
			</label>
	  	</p>
	  	<p class="seventhGroup">
	  		<label class="studentBorder">
	  			Citizenship Information
	  		</label>
	  		<br><br>
	  		Birth Country:
	  		<?php echo "<input type=\"text\" 
	  					id=\"birthCountry\" 
	  					name=\"birthCountry\" 
	  					value=\"$birthCountry\" 
	  					maxlength=\"50\" 
	  					style=\"width: 120px\" 
	  					class=\"hiddenBorder\">"?>
	  		<span style="margin-left: 10px">If Philippines, Province of Birth: </span>
	  		<?php echo "<input type=\"text\" 
	  					id=\"ifPhil\" 
	  					name=\"ifPhil\" 
	  					value=\"$ifPhil\" 
	  					maxlength=\"50\" 
	  					style=\"width: 100px\" 
	  					class=\"hiddenBorder\">"?>
	  		<span style="margin-left: 10px">Citizenship: </span>
	  		<?php echo "<input type=\"text\" 
	  					id=\"citizenship\" 
	  					name=\"citizenship\" 
	  					value=\"$citizenship\" 
	  					maxlength=\"50\" 
	  					style=\"width: 125px\" 
	  					class=\"hiddenBorder\">"?>
	  		<br><br>
	  		If student not born in Philippines, provide date student entered Philippines to live for the first time:	
	  		<?php echo "<input type=\"text\" 
	  					id=\"ifNotPhilYear\" 
	  					name=\"ifNotPhilYear\" 
	  					value=\"$ifNotPhilYear\" 
	  					maxlength=\"15\" 
	  					style=\"width: 40px\" 
	  					class=\"hiddenBorder\">
							
						<input type=\"text\" 
	  					id=\"ifNotPhilMonth\" 
	  					name=\"ifNotPhilMonth\" 
	  					value=\"$ifNotPhilMonth\" 
	  					maxlength=\"15\" 
	  					style=\"width: 40px\" 
	  					class=\"hiddenBorder\"> 

	  					<input type=\"text\" 
	  					id=\"ifNotPhilDay\" 
	  					name=\"ifNotPhilDay\" 
	  					value=\"$ifNotPhilDay\" 
	  					maxlength=\"15\" 
	  					style=\"width: 40px\" 
	  					class=\"hiddenBorder\">"?>
	  		<br>
	  		<span style="margin-left: 646px;font-size: 12px">Year</span>
	  		<span style="margin-left: 15px;font-size: 12px">Month</span>
	  		<span style="margin-left: 18px;font-size: 12px">Day</span>
	  		<br>
	  		<?php echo "<i>For School Use</i> <b>- Status in Philippines</b>"; ?>
	  		<br><br>
	  		<span style="margin-left: 15px"></span>
	  		<label class="container">Philippines Citizen
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Study Permit/Student Visa
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Native Ancestry
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<br><br>
			<span style="margin-left: 15px"></span>
			<label class="container">Permanent Resident / Landed Immigrant
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Refugee Claimant
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Verification in OSR
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<br><br>
			<span style="margin-left: 15px"></span>
			<label class="container">Others (specify)
			  <input type="checkbox" unchecked="checked">
			  <span class="checkmark"></span>
			</label>
			<?php echo "<input type=\"text\" 
	  					id=\"otherStatus\" 
	  					name=\"otherStatus\" 
	  					value=\"$otherStatus\" 
	  					maxlength=\"300\" 
	  					style=\"width: 623px\" 
	  					class=\"hiddenBorder\">" ?>
	  	</p>
	</div>
</body>
</html>