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
	<title>Time Table</title>

</head>
<body>
	<div class="header">
    <a href="index.php"><img src="IMAGE/logo web 2.png" alt="HTML5 Icon" style="width:100px;height:100px;padding-left: 510px 50px"></a>

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
  		<a href="#">Time Table</a>
  		<a href="gallery.php">Gallery</a>
  		<a href="download.php">Download</a>
  		<a style="float: right;" href="login.php">Login</a>
	</div>

	<div id="mainSection">
		<table id="t01" border="1">
			<tr>
				<th>Time/Day</th>
				<th colspan="2">8.00 a.m - 10.00 a.m</th>
				<th colspan="2">10.10 a.m - 12.00 p.m</th>
				<th colspan="2">1.30 p.m - 4.00 p.m</th>
				<th colspan="2">4.10 p.m - 6.00 p.m</th>
			</tr>
			<tr>
				<th>Monday</th>
				<td style="background-color: #ffccff" colspan="2"><a href="#csp650Section">CSP650 (VR02)<br>Dr Kay</a></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Tuesday</th>
				<td style="background-color: #ffccff" colspan="2"><a href="#csp650Section">CSP650 (TH05)<br>Dr Kay</a></td>
				
				<td></td>
				<td></td>
				<td style="background-color: #e6ffff" colspan="2"><a href="#ent600Section">ENT600 (VR06)<br>Sir Roy</a></td>
				
				<td></td>
				<td></td>
			</tr>
			<tr>
				<th>Wednesday</th>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td style="background-color: #99ccff" colspan="2"><a href="#its610Section">ITS610 (TH01)<br>Dr Jazz</a></td>
				
			</tr>
			<tr>
				<th>Thursday</th>
				<td></td>
				<td></td>
				<td style="background-color: #99ccff" colspan="2"><a href="#its610Section">ITS610 (DK01)<br>Sir Albert Zack</a></td>
				
				<td></td>
				<td></td>
				<td style="background-color: #ffffcc" colspan="2"><a href="#csc574Section">CSC574 (M10)<br>Sir Albert Nash</a></td>
				
			</tr>
			<tr>
				<th>Friday</th>
				<td></td>
				<td></td>
				<td style="background-color: #ffffcc" colspan="2"><a href="#csc574Section">CSC574 (DK03)<br>Sir Azon</a></td>
				
				<td></td>
				<td></td>
				<td></td>
				<td></td>
			</tr>
		</table>

		<p align="center" style="font-family: Arial;font-size: 17px;"><b>
		For more information please click the subject.<br>Go to <a href="download.html">DOWNLOAD</a> tab to download the time table.</b></p>
	</div>

	<div id="csp650Section">
		<p align="center"><a href="#mainSection">Back to time table</a></p>
		<h1 style="color: black;text-align: center;font-family: arial"><u>CSP 650</u></h1><br>
		<p><b>Lecturer: Dr Kay</b></p>
		<p><b>Time: (Monday) 8.00 a.m-10.00a.m. || (Tuesday) 8.00 a.m-10.00a.m.</b></p>
		<p><b>Venue: CS2(VR02) || CS1(TH05) </b></p>
		<p><b>Course Description:</b></p>
		<p>1. Its for final year student.</p>
		<p>2. Student done research.</p>
		<p>3. Student have their own SV to monitor them.</p>
		
		
	</div>
	<div id="ent600Section">
		<p align="center"><a href="#mainSection">Back to time table</a></p>
		<h1 style="color: black;text-align: center;font-family: arial"><u>ENT 600</u></h1><br>
		<p><b>Lecturer: Sir Roy</b></p>
		<p><b>Time: Tuesday (1.30p.m.-4.00p.m. )</b></p>
		<p><b>Venue: CS2(VR06)</b></p>
		<p><b>Course Description:</b></p>
		<p>1. It is about technology entrepreneur.</p>
		<p>2. Student must have their own innovation idea.</p>
		<p>3. Student had only assesment and no final exam is needed.</p>
		
		
	</div>
	<div id="its610Section">
		<p align="center"><a href="#mainSection">Back to time table</a></p>
		<h1 style="color: black;text-align: center;font-family: arial"><u>ITS 610</u></h1><br>
		<p><b>Lecturer: Dr Jazz || Sir Albert Zack</b></p>
		<p><b>Time: (Wednesday) 4.10p.m.-6.00p.m. || (Thursday) 10.10a.m.-12.00p.m. </b></p>
		<p><b>Venue: CS1(TH01) || CS1(CS01) </b></p>
		<p><b>Course Description:</b></p>
		<p>1. It is about ethics and technology.</p>
		<p>2. Teach student that every things had ethics in real life.</p>
		<p>3. Student do have mini project and final examination.</p>
			
	</div>
	<div id="csc574Section">
		<p align="center"><a href="#mainSection">Back to time table</a></p>
		<h1 style="color: black;text-align: center;font-family: arial"><u>CSC 574</u></h1><br>
		<p><b>Lecturer: Sir Albert Nash || Sir Azon</b></p>
		<p><b>Time: (Thursday) 4.10p.m.-6.00p.m. || (Friday) 10.10a.m.-12.00p.m.</b></p>
		<p><b>Venue: CS1(M10) || CS2(DK03) </b></p>
		<p><b>Course Description:</b></p>
		<p>1. It is about Web Application Development.</p>
		<p>2. Student will learn on how to create web site and web application.</p>
		<p>3. Student need to do mini project and this course did not have any final examination.</p>
		
	</div>

	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>