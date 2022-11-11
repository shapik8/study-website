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
	<title>Resume</title>
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
  		<a href="biography.php">Biography</a>
  		<a href="#">Resume</a>
  		<a href="timetable.php">Time Table</a>
  		<a href="gallery.php">Gallery</a>
  		<a href="download.php">Download</a>
  		<a style="float: right;" href="login.php">Login</a>
	</div>
	<p><h1 align="center">Resume</h1></p>
	<div class="main">
		<table id="tResume" border="0" align="center">
			<tr>
				<td style="background-color: lightblue;" width="30%">
					<h1>ALBERT<br>ZACK</h1><hr>+601546332733<br>zackAlbert3123@gmail.com
				</td>

				<td colspan="2">
					<h2>Experience</h2><hr>
					<b>PICKER/PACKER</b>-09/2015 to 05/2018<br>
					<b>AMS COMPANY, CHICAGO</b><br>
					<ul>
						<li>Inspect all incoming commodity and shipping materials.</li>
						<li>Place items in carefully sized crates and containers for shipping to customer destinations.</li>
						<li>Affix labels to incoming merchandise from suppliers to input quantities into system and determine correct location for routing to storage or shipment areas.</li>
						<li>Use warehouse equipment such as forklifts, and pallet jacks safely.</li>
					</ul>
				</td>

			</tr>
			<tr>
				<td style="background-color: lightblue;">
					<h2>SUMMARY</h2><hr>Physically fit Warehouse Picker and Packer with experience in all aspects of inventory, packaging, and shipping operations. Able to stand for entire shift and lift up to 100 pounds. Good spatial awareness and fundamental mathematical abilities.
				</td>
				<td colspan="2">
					<hr>
					<b>PICKER/PACKER</b> -09/2015 to 05/2018<br>
					<b>UPC COMPANY, DETROIT</b>
					<ul>
						<li>Inspect all incoming commodity and shipping materials</li>
						<li>Place items in carefully sized crates and containers for shipping to customer destinations.</li>
						<li>Affix labels to incoming merchandise from suppliers to input quantities into system and determine correct location for routing to storage or shipment areas.</li>
						<li>Use warehouse equipment such as forklifts, and pallet jacks safely.</li>
					</ul>
				</td>
				
			</tr>
			<tr>
				<td style="background-color: lightblue;">
					<h2>HIGHLIGHTS</h2><hr>
					<ul>
						<li>Warehouse equipment operation</li>
						<li>Resourceful problem solver</li>
						<li>Friendly and helpful</li>
						<li>Good physical condition</li>
						<li>Safety-conscious</li>
						<li>Team player</li>
					</ul>
				</td>
				<td colspan="2">
					<h2>Education</h2><hr>
					Bachelor of Science: <b>Shipping-2014<br>Trade School, Chicago</b>
					
					<h2>Certifications</h2><hr>
					<ul>
						<li>Permissions for forklifts.</li>
						<li>Permissions for car lift.</li>
						<li>Permissions for container jacks</li>
					</ul>
				</td>
			</tr>
		</table>
		<p align="center" style="font-family: Arial;font-size: 17px;"><b>Go to <a href="download.html">DOWNLOAD</a> tab to download resume.</b></p>
	</div>
	
	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>