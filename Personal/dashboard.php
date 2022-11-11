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
	<title>Personal Web</title>

	<style type="text/css">
       .footer {
              position: fixed;
              left: 0;
              bottom: 0;
              width: 100%;
              background-color: #FFFF66;
              color: black;
              text-align: center;
        } 
  </style>

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
  		<a href="#">Home</a>
      <a href="biography.php" target="_self">Biography</a>
      <a href="resume.php">Resume</a>
      <a href="timetable.php">Time Table</a>
      <a href="gallery.php">Gallery</a>
      <a href="download.php">Download</a>
      <a style="float: right;" href="logout.php">Log Out</a>
	</div>

	<div class="mainHome">
  		<p align="center" style="position: fixed; font-family: Arial; font-size: 40px;padding: 30px 0px;margin-top: 0px;"><img src="IMAGE/home icon.png" style="width: 30%"><br><br>Welcome to your personal website</p>
		
	</div>

	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>

</body>
</html>