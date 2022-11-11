<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		
		function go(){
			
			var fN = document.forms["myForm"]["fName"].value;
			var lN = document.forms["myForm"]["lName"].value;
			var ad = document.forms["myForm"]["addr1"].value;
			var ct = document.forms["myForm"]["City"].value;
			var pN = document.forms["myForm"]["num"].value;
			var eM = document.forms["myForm"]["email"].value;
			var uN = document.forms["myForm"]["uName"].value;

			var pass = document.forms["myForm"]["pass"].value;
			var rePass = document.forms["myForm"]["rePass"].value;

			if(fN=="" || lN=="" || ad=="" || ct=="" || pN=="" || eM=="" || uN=="")
				alert("Empty Fill");

			else if (pass==rePass)
			{
				alert("Everything completed");
				window.location.assign("index.php");
			}
			else{
				alert("Password not match");
				//window.location.assign("index.php");
			}

			
		}
		
</script>

		
	

	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<title>Sign Up</title>
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
		<a href="index.php">Home</a>
  		<a href="biography.php">Biography</a>
  		<a href="#">Resume</a>
  		<a href="timetable.php">Time Table</a>
  		<a href="gallery.php">Gallery</a>
  		<a href="download.php">Download</a>
  		<a style="float: right;" href="#">Sign Up</a>
  		<a style="float: right;" href="login.php">Login</a>
  	</div>
	

	<div class="main">
		<table  align="center" id="tSignUp">
			<form name="myForm" onsubmit="go()">
				<tr>
					<td colspan="2" style="text-align: center;font-family: arial;font-size: 28px;background-color: #e1eaea">Sign Up</td>
				</tr>
				<tr>
					<td width="35%">First Name</td>
					<td align="left"><input type="text" name="fName" size="40" pattern="[A-Za-z]{1,}" title="Alphabet only" required=""></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" name="lName" size="40" pattern="[A-Za-z]{1,}" title="Alphabet only" required=""></td>
				</tr>
				<tr>
					<td>Gender</td>
					<td>
						<input type="radio" name="gender">Male
						<input type="radio" name="gender">Female
					</td>
				</tr>
				<tr>
					<td>Address</td>
					<td>
						<input type="text" name="addr1" size="40" required=""><br>
						<input type="text" name="addr2" size="40"><br>
						<input type="text" name="City" size="40" placeholder="City" required=""><br>
						<select name="country"  required="">
							<option value="Kelantan">Kelantan</option>
							<option value="Pahang">Pahang</option>
							<option value="Terengganu">Terengganu</option>
							<option value="Johor">Johor</option>
							<option value="Melaka">Melaka</option>
							<option value="Kuala Lumpur">Kuala Lumpur</option>
							<option value="Selangor">Selangor</option>
							<option value="Perlis">Perlis</option>
							<option value="Perak">Perak</option>
							<option value="Kedah">Kedah</option>
							<option value="Sabah">Sabah</option>
							<option value="Sarawak">Sarawak</option>
							<option value="Labuan">Labuan</option>
							<option value="Negeri Sembilan">Negeri Sembilan</option>
							<option value="Penang">Penang</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						Phone Number
					</td>
					<td>
						<input type="text" name="num" size="40" pattern="[0-9]{10,}" title="Numeric only and 10-11 character" required="">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" size="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Example: abc@ymail.com" required=""></td>
				</tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="uName" size="40" required=""></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="pass" size="40" required=""></td>
				</tr>
				<tr>
					<td>Re-enter Password</td>
					<td><input type="password" name="rePass" size="40" required=""></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<!--<input type="submit" name="send" onclick="">-->
						<button type="submit" onclick="go()">Submit</button>
						
						<input type="reset" name="reset" onclick="">
					</td>
				</tr>
			</form>
		</table>
	</div>

	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>