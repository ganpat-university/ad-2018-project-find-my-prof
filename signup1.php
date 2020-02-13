<html>
	<head>
		<title>Student Registeration</title>
		<link rel="stylesheet" src="text/css" href="registerIndi.css">
		<style>
		.button
		{
			background-color: #008080;
			font-family: century gothic;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 2px;
			cursor: pointer;
			border-radius: 19px;
		}
		.textarea
		{
		    width: 100%;
		    padding: 12px 20px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 3px solid #ccc;
			-webkit-transition: 0.5s;
			transition: 0.5s;
			outline: none;
		}
		.textarea:focus 
		{
		border: 3px solid #008080;
		}
		</style>
	</head>
	<body>
		<?php
			include'header.php';
		?>
		<div>
			<form method="post" action="">
				<fieldset style="width:450px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Student </b><b>Register</></legend>

						<h2>Create Account</h2>
						<table style="margin:0 auto;">
							<tr>
								<td colspan="2">Full Name : </td>
									<td colspan="2"><input type="text" placeholder="Full Name" style="width:100%;" class="textarea" name="fname" pattern="[A-Za-z ]+" required ></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Email : </td>
									<td colspan="2"><input type="email" placeholder="Email" style="width:100%;"class="textarea" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> </td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Phone Number : </td>
									<td colspan="2"><input type="text" placeholder="Phone Number" style="width:100%;" class="textarea" name="phno" pattern="[0-9]{10}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Enrollment : </td>
									<td colspan="2"><input type="text" placeholder="Enrollment" style="width:100%;" class="textarea" name="uname" pattern="[0-9]{11}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Password : </td>
									<td colspan="2"><input type="password" style="width:100%;" name="pass" class="textarea" pattern="[A-Za-z0-9]{6,}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2">Confirm Password : </td>
									<td colspan="2"><input type="password" style="width:100%;" name="cpass" class="textarea" pattern="[A-Za-z0-9]{6,}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="4" align="center"><input type="submit" name="submit" class="Button"id="btn" value="Submit"></td>
							</tr>
						</table>
					<br/>
				</fieldset>
			</form>
		</div>
	</body>
</html>

<?php

	include 'header.php';
	
	function Adddata()
	{
		require 'Connection.php';
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phno'];
		$Enrollment=$_POST['enroll'];
		$Password = $_POST['pass'];
		$cpassword = $_POST['cpass'];
		
		if($Password==$cpassword){
			$sql = "INSERT INTO individualtable(Name,Email,Phone,Username,Password)
			VALUES ('$name','$email','$phone','$Username','$Password')";
			if ($con->query($sql) === TRUE) {

			}
			else{
				header("location:registerIndi.php");
			}
		}
		else {
			echo'<span style = "color:Red;">Password didn\'t matched</span>';	
		}
	}
	if(isset($_POST['submit'])){
		Adddata();
	}
	
?>