<?php
    require_once ('session.php');
    if(!isset($_SESSION)) 
    { 
       session_start();
    }
		
    Require_once('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Biography</title>
</head>
<body>
	<div class="header">
    <a href="dashboard.php"><img src="IMAGE/logo web 2.png" alt="HTML5 Icon" style="width:100px;height:100px;padding-left: 510px 50px"></a>

    <a href="https://web.whatsapp.com/"><img src="IMAGE/iconWs.png" style="float: right; width: 50px;height: 50px"></a>
    <a href="https://www.instagram.com/"><img src="IMAGE/iconIg.png" style="float: right; width: 50px;height: 50px"></a>
    <a href="https://twitter.com/?lang=en"><img src="IMAGE/iconTwiteer.png" style="float: right; width: 50px;height: 50px"></a>
    <a href="https://www.facebook.com/"><img src="IMAGE/iconFb.png" style="float: right; width: 50px;height: 50px"></a>
    
    
    <a href="https://fskm.uitm.edu.my/v4/"><img src="IMAGE/iconFskm.png" style="float: right; width: 50px;height: 50px"></a>
    <a href="https://istudent.uitm.edu.my/isp/index_isp.htm"><img src="IMAGE/iconStudentPortal.png" style="float: right; width: 50px;height: 50px"></a>
    <a href="https://www.uitm.edu.my/index.php/en/"><img src="IMAGE/iconUiTM.png" style="float: right; width: 50px;height: 50px"></a>

    </div>
	<div class="navbar">
		<a href="dashboard.php">Home</a>
  		<a href="#">Biography</a>
  		<a href="resume.php">Resume</a>
  		<a href="timetable.php">Time Table</a>
  		<a href="gallery.php">Gallery</a>
  		<a href="download.php">Download</a>
  		<a style="float: right;" href="login.html">Login</a>
	</div>
	
	<p><h1 align="center">Biography</h1><p>
	<div class="main">
		<table class="tBio">
			<tr>
				<td>
					<img style="width: 180px;height: 200px;" src="IMAGE/avatarBio.png">
				</td>
			</tr>
			<tr>
				<td style="font-family: arial;font-size: 19px;">
					<b>ALBERT ZACK</b><hr>
					<b>I'm a experience picker from Canada</b><br>
					<hr>
					<b>Age: </b>39<br>
					<b>Nationality: </b>Canada<br>
					<b>Identification No: </b>26598475<br>
					<b>Address: </b>56,hujan panas ribut pantai, CANADA<br>
					<b>Telephone No: </b>+601546332733<br>
					<b>Email: </b>zackAlbert123@gmail.com
				</td>
			</tr>
		</table>
	</div>
	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>