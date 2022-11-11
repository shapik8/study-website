<?php
	require_once("connect.php");
	session_start();
	$error="";
	if ($_SERVER["REQUEST_METHOD"]=="POST"){

		$id = mysqli_real_escape_string($db,$_POST["userName"]);
		$pass = mysqli_real_escape_string($db,$_POST["password"]);

		$sql = "SELECT id,password FROM user WHERE id='$id' and password='$pass'";
		$result = mysqli_query($db,$sql);
		$count = mysqli_num_rows($result);

		if ($count == 1)
		{
			$_SESSION['login_user'] = $id;
			echo "<script type='text/javascript'>
                window.location.href='dashboard.php'; 
                alert('Successfully Login');
                </script>";
		}
		else
			echo "<script type='text/javascript'> 
                alert('Incorrect ID or password!!');
                </script>";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<script type="text/javascript">

		function loginForm1(){
			var userName = document.forms["loginForm"]["userName"].value;
			if (userName=="")
				alert("Field is required");
		}

	</script>
	<title>Login</title>
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
  		
  		<a style="float: right;" href="signUp.php">Sign Up</a>
  		

	</div>
	
	<div class="main">
		<form name="loginForm" method="POST" >
			<table id="tLogIn" border="0" align="center">
			<tr>
				<td style="text-align: center;font-family: arial;font-size: 28px;background-color: #e1eaea" colspan="2">LOGIN</td>
			</tr>
			<tr>
				<td width="20%"><b>Username</b></td>
				<td><input type="text" name="userName" size="40" ></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td><input type="password" name="password" size="40" ></td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="submit" onclick="loginForm1()">
					<input type="reset" name="">
				</td>	
			</tr>
			<tr>
				<td></td>
				<td>
					<b>Not a member? Click <a href="signUp.php">here</a> to Sign Up</b>
				</td>
			</tr>
			</table>
		</form>
	</div>
	
	<div class="footer">
  		<a href="disclaimerAndCopyright.php"><p>Disclaimer & Copyright</p></a>
	</div>
	
</body>
</html>