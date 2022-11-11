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
	<title>Download</title>
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
  		<a href="resume.php">Resume</a>
  		<a href="timetable.php">Time Table</a>
  		<a href="gallery.php">Gallery</a>
  		<a href="#">Download</a>
  		<a style="float: right;" href="login.php">Login</a>
	</div>
	<h1 align="center">Download PDF</h1>
	<div id="main">
		<table border="1" style="width: 40%;margin-left: 450px;margin-top:40px">
			<tr>
				<td style="text-align:center;">
					<img src="IMAGE/timeTableIcon.png" style="width: 100px;height: 100px">
					<br>Click <a href="IMAGE/timeTableDownload.png" download="IMAGE/timeTableDownload.png">here</a> to download timetable.
				</td>
			</tr>
			<tr>
				<td  style="text-align:center;">
					<img src="IMAGE/resumeIcon.png" style="width: 100px;height: 100px">
					<br>Click <a href="PDF/resumeDownload.pdf" download="PDF/resumeDownload.pdf">here</a> to download resume.
				</td>
			</tr>
		</table>
	</div>

	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>