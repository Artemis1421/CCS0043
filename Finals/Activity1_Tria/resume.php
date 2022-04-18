<?php
$bio = array();
$data = array();
$data['jobs'] = array();
$prefs = array();
$title = "Resume / Portfolio";
$bio['name'] 	= "Tria, Patrick Andrew";
$bio['phone'] 	= "(+639) 201091034";
$bio['email'] 	= "patrickandrewtria14@yahoo.com";
$bio['address']	= "B8 L9 Singkamas St. SM Homes Deparo 2";
$bio['city']	= "Caloocan";
$bio['state']	= "Metro Manila";
$bio['zip']		= "1420";
$prefs['show_phone']	= 1;
$prefs['show_email']	= 1;
$prefs['show_address']	= 1;
$prefs['encode_output']	= 0;
$data['objective'] = "Seeking leverage and to improve my technical skills, professionalism, and such as improvisation to the company and for myself. Aspiring to have own company in the future.";

$data['skills_technologies_projects'] = array("Can cope up and adapt quickly to the working environment."
                                             ,"Have the right working attitude, techincal and teamwork skills, and decision making."
                                             ,"Can adapt and withstand easilty with pressure and unexpected problems."
                                             ,"Ability to be efficient, effective and time manage to complete the tasks required."
                                             ,"Can do all the repetitive tasks accurate and fast."
                                             );

$data['education_interests'] = array("Knowledgable in editing videos with Adobe Premier Pro."
                                     ,"Knowledgable in coding languages like Java, C#, C++ and Python."
                                     ,"Knowledgable in using code editors like Netbeans, Visual Basic, Sublime, Atom, Android Studio, SQL Developer."
                                     ,"Knowledgable in operating Microsoft Office Tools such as Word, Powerpoint, and Excel."
                                    );

$data['jobs'][] = array('period' =>			"2019-Present"
                       ,'employer' =>		"Far Eastern University Institute of Technology"
                       ,'location' =>		"Manila City"
                       ,'positions' => array('College' => array("Bachelor Of Science in Computer Science Specialized in Software Engineering"))
                       ,'show' => 1 
                       );

$data['jobs'][] = array('period' =>			"2017-2018"
                       ,'employer' =>		"AMA Computer University Fairview Campus"
                       ,'location' =>		"Quezon City"
                       ,'positions' => array('Senior Highschool' => array("Information Communication and Technology"))
                       ,'show' => 1 
                       );

$data['jobs'][] = array('period' =>			"2012-2016"
                       ,'employer' =>		"Holy Angel School of Caloocan"
                       ,'location' =>		"Caloocan City"
                       ,'positions' => array('Junior Highschool' => array("Grades 7 - 10"))
                       ,'show' => 1 
                       );

$data['jobs'][] = array('period' =>			"2009-2012"
                       ,'employer' =>		"Holy Angel School of Caloocan"
                       ,'location' =>		"Caloocan City"
                       ,'positions' => array('Elementary' => array("Grades 3 - 6"))
                       ,'show' => 1 
                       );

$data['jobs'][] = array('period' =>			"2006-2008"
                       ,'employer' =>		"St. Benedict School of Novaliches"
                       ,'location' =>		"Caloocan City"
                       ,'positions' => array('Pre-School to Elementary' => array("Pre-School - Grade 2"))
                       ,'show' => 1
                       );

function pad_and_wrap($string, $pad_to = 20, $pad_with = ' ', $wrap_at = 80, $bullet = '') {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		$string = strip_tags($string);
	}
	if (!empty($bullet)) {
		$string = $bullet.$string;
	}
	if (strlen($string) > $wrap_at) {
		$wrap_line_at = strrpos(substr($string, 0, $wrap_at), ' ');
		$output = str_pad('', $pad_to, $pad_with).substr($string, 0, $wrap_line_at);
		$remainder = substr($string, $wrap_line_at + 1);
		if (strlen($remainder) > 0) {
			$output .= "\n".pad_and_wrap($remainder, ($pad_to + strlen($bullet)), $pad_with, ($wrap_at - strlen($bullet)), '');
		}
	}
	else {
		$output = str_pad('', $pad_to, $pad_with).$string;
	}
	return $output;
}

function encode_output($str) {
	global $prefs;
	if (!empty($prefs['encode_output']) && $prefs['encode_output'] == 1) {
		return htmlentities($str);
	}
	else {
		return $str;
	}
}

ob_start();
?>
body {
	margin: 10px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 90% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid #666;
	clear: both;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 700px;
}
h3 {
	float: left;
	font: 80% verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
	padding: 0;
	width: 446px;
}
li {
	font-size: 70%;
	margin: 0 0 3px 20px;
	padding: 0;
}
p {
	font-size: 70%;
	margin: 0 0 10px 0;
	padding: 0;
	width: 575px;
}
body ul {
	margin: 0 0 0 125px;
	padding: 0;
	width: 575px;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
	width: 575px;
}
#bio_left {
	font-size: 75%;
	float: left;
	width: 350px;
}
#bio_right {
	font-size: 75%;
	float: left;
	text-align: right;
	width: 350px;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 125px;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 125px;
}
.job {
	clear: both;
	width: 700px;
}
.job_data {
	float: left;
	width: 575px;
}
.location {
	clear: right;
	float: left;
	text-align: right;
	width: 125px;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {
	margin-top: 20px;
}
#meta {
	margin-top: 30px;
}
<?php
$css_screen = ob_get_contents();
ob_end_clean();

ob_start();
?>
body {
	margin: 0px;
}
p, td, span, li, a { 
	font-family: verdana, arial, helvetica, sans-serif; 
}
h1 {
	font: 14pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 5px 0;
}
h2 {
	border-bottom: 1px solid #666;
	clear: both;
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 15px 0 10px 0;
	padding: 0 0 3px 0;
	width: 100%;
}
h3 {
	font: 11pt verdana, arial, helvetica, sans-serif;
	font-weight: bold;
	margin: 0 0 2px 0;
	padding: 0;
}
li {
	font-size: 10pt;
	margin: 0 0 3px 5%;
	padding: 0;
}
p {
	font-size: 10pt;
	margin: 0 0 10px 0;
	padding: 0;
}
body ul {
	margin: 0 0 0 20%;
	padding: 0;
}
body div ul {
	margin: 3px 0 0 0;
	padding: 0;
}
#bio_left {
	font-size: 11pt;
	float: left;
	width: 50%;
}
#bio_right {
	font-size: 11pt;
	float: left;
	text-align: right;
	width: 50%;
}
.company {
	clear: both;
	margin: 0 0 5px 0;
	padding: 0;
}
.data {
	padding-left: 20%;
}
.date {
	clear: left;
	float: left;
	padding-top: 2px;
	width: 20%;
}
.job {
	clear: both;
	width: 100%;
}
.job_data {
	float: left;
	width: 80%;
}
.location {
	clear: right;
	float: right;
	text-align: right;
	width: 20%;
}
.position {
	font-style: italic;
	margin: 0 0 5px 0;
}
#references {
	margin-top: 20px;
}
#meta {
	display: none;
}
<?php
$css_print = ob_get_contents();
ob_end_clean();

ob_start();
$split_length = floor(strlen($bio['email']) / 4);
?>
function email() { // try to avoid spam trollers, intentionally complex
	var a = "<?php print(substr($bio['email'], 0, $split_length)); ?>";
	var b = "<?php print(substr($bio['email'], $split_length, $split_length)); ?>";
	var c = "<?php print(substr($bio['email'], ($split_length * 2), $split_length)); ?>";
	var d = "<?php print(substr($bio['email'], ($split_length * 3), ($split_length + (strlen($bio['email']) % 4)))); ?>";
	
	e_string = "<a href=\"ma" + "ilto:" + a + b + c + d + "\">" + a + b + c + d + "</a>";
	document.write(e_string);
}
<?php
$js = ob_get_contents();
ob_end_clean();

if (isset($_REQUEST["output"])) {
	$output = stripslashes($_REQUEST["output"]);
}
else {
	$output = 'html';
}
switch ($output) {
	case "css_screen":
		header("Content-type: text/css");
		print($css_screen);
		break;
	case "css_print":
		header("Content-type: text/css");
		print($css_print);
		break;
	case "js":
		header("Content-type: text/javascript");
		print($js);
		break;
	case "html":
		if (isset($_GET['contained']) && $_GET['contained'] == 1) {
			header("Content-Type: application/force-download");
			header("Content-Type: application/octet-stream");
			header("Content-Type: application/download");
			header("Content-Disposition: attachment; filename=\"resume.html\"");
		}
?>
<!DOCTYPE html PUBLIC>
<html>
<head>
<title><?php print(encode_output($title)); ?></title>
<!--<div style="background-image: url('login_bg.jpg');"> -->
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<?php

if (isset($_GET['contained']) && $_GET['contained'] == 1) {
?>
<style type="text/css" media="screen">
<?php
	print($css_screen);
?>
</style>
<style type="text/css" media="print">
<?php
	print($css_print);
?>
</style>
<script type="text/javascript">
<?php
	print($js);
?>
</script>
<?php
}
else {
?>
<style type="text/css" media="screen">
	@import url(http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_screen);
</style>
<link rel="stylesheet" type="text/css" media="print" href="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=css_print" />
<script type="text/javascript" src="http://<?php print($_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']); ?>?output=js"></script>
<?php
}
?>
</head>

<body style="background-color: #F0F7EE">
	 <style>
.content {
  max-width: 800px;
  margin: auto;
}
.navbar {
		overflow: hidden;
		background-color: #3F612D;
		position: fixed; 
		top: 0%; 
		left: 0%;
		width: 100%; 
		height: 80px;
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
		height: 80px;
	}

	.navbar a:hover {
		background: #D1D5DE;
		color: black;
	}
	</style>
	<div class="navbar">
		<a href="resume.php"><h4 style="color:#E3B23C; font-size: 15px;">Resume / Portfolio</h3></a>
	  	<div class="navbarphoto">
	  		<span></span><img src="logo.png" alt="logo.png" width="70px" height="80px">	
	  	</div>
	</div>
<div class="content">
  <br><br><br><br><br>
<h1 style="font-size: 18px"><?php print(encode_output($bio['name'])); ?></h1>
<p id="bio_left">
<?php
if ($prefs['show_phone'] == 1) {
	print(encode_output($bio['phone']).'<br />');
}
if ($prefs['show_email'] == 1) {
?>
	<script type="text/javascript">email();</script>
<?php
}
?>
</p>
<p id="bio_right">
<?php
if ($prefs['show_address'] == 1) {
	print(encode_output($bio['address']).'<br />'
	     .encode_output($bio['city']).', '
	     .encode_output($bio['state']).' '
	     .encode_output($bio['zip'])
	     );
}
?>
</p>
<br> <br> 
<hr> 
<h3 style="font-size: 14px">OBJECTIVE</h3>
<br> 
<hr> 
<p class="data" style="font-size: 13px"><?php print(encode_output($data['objective'])); ?></p>
<hr>
<h3 style="font-size: 14px">EDUCATIONAL QUALIFICATION</h3>
<br> 
<hr>
<?php
foreach ($data['jobs'] as $job) { 
	if ($job['show'] == 1) {
		if (!empty($job['employer_link'])) {
			$link = array(
				'<a href="'.$job['employer_link'].'">'
				,'</a>'
			);
		}
		else {
			$link = array('','');
		}
?>
<div class="job">
	<p class="date"><?php print(encode_output($job['period'])); ?></p>
	<div class="job_data">
		<h3><?php print($link[0].encode_output($job['employer']).$link[1]); ?></h3>
<?php
		if (!empty($job['location'])) {
?>
		<p class="location"><?php print(encode_output($job['location'])); ?></p>
<?php
		}
		else {
?>
		<p class="location">&nbsp;</p>
<?php
		}
		if (!empty($job['employer_info'])) {
?>
		<p class="company"><?php print(encode_output($job['employer_info'])); ?></p>
<?php
		}
		foreach ($job['positions'] as $title => $position) {
?>
		<p class="position"><?php print(encode_output($title)); ?></p>
		<ul>
<?php
			foreach ($position as $responsibility) {
				print("			<li>".encode_output($responsibility)."</li>\n");
			}
?>
		</ul>
		&nbsp;
<?php
		}
?>
	</div>
</div>

<?php
	}
}
?>
<br> <br> <br> <br>
<hr> 
<h3 style="font-size: 14px">KEY SKILLS</h3>
<br> 
<hr> 
<ul>
<?php
foreach ($data['skills_technologies_projects'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>
<hr> 
<h3 style="font-size: 14px">QULAIFICATIONS</h3>
<br> 
<hr> 
<ul>
<?php
foreach ($data['education_interests'] as $temp) {
	print("	<li>".encode_output($temp)."</li>\n");
}
?>
</ul>
</body>
</html>
<?php
		break;
	case "text":
		header("Content-type: text/plain");
		print($bio['name']."\n\n");
		if ($prefs['show_phone'] == 1) {
			print(str_pad($bio['phone'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['address'], 50, ' ', STR_PAD_LEFT)."\n"); 
		}
		if ($prefs['show_email'] == 1) {
			print(str_pad($bio['email'], 50, ' '));
		}
		if ($prefs['show_address'] == 1) {
			print(str_pad($bio['city'].', '.$bio['state'].' '.$bio['zip'], 50, ' ', STR_PAD_LEFT)); 
		}
		print("\n\n");
		print('OBJECTIVE'."\n".str_pad('', 100, '-')."\n");
		print(pad_and_wrap($data['objective'])."\n\n\n");
		print('EXPERIENCE'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['jobs'] as $job) { 
			if ($job['show'] == 1) {
				print(str_pad($job['period'], 20, ' '));
				print(str_pad($job['employer'], 55, ' '));
				print(str_pad($job['location'], 25, ' ', STR_PAD_LEFT)."\n");
				if (!empty($job['employer_info'])) {
					print(pad_and_wrap($job['employer_info'])."\n");
				}
				foreach ($job['positions'] as $title => $position) {
					print("\n".pad_and_wrap($title)."\n");
					foreach ($position as $responsibility) {
						print(pad_and_wrap($responsibility, 20, ' ', 80, '- ')."\n");
					}
				}
			}
			print("\n");
		}
		print("\n".'QUALIFICATIONS'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['skills_technologies_projects'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		print("\n\n".'EDUCATION'."\n".str_pad('', 100, '-')."\n");
		foreach ($data['education_interests'] as $temp) {
			print(pad_and_wrap($temp, 20, ' ', 80, '- ')."\n");
		}
		break;
}
?>