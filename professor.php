<?php
// Start the session
session_start();
?>
<html>
	<head>
		<title>Student Registeration</title>
		<link rel="stylesheet" src="text/css" >
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
		border: 2px solid #008080;
		}
		</style>
	</head>
	<body>
		<?php
			include'header.php';
		?>
		<div>
			<form method="post" action="authen.php">
				<fieldset style="width:700px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Professor </b><b>Register</></legend>

						<h2>Create Account</h2>
						<table style="margin:0 auto;">
							<tr>
								<td colspan="2"><b>Full Name : </td>
									<td colspan="2"><input type="text" class="textarea" id="fname" name=" fname" placeholder="Full Name" style="width:100%;" name="fname" pattern="[A-Za-z ]+" required ></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Email : </td>
									<td colspan="2"><input type="email" class="textarea" id="email" name="email" placeholder="Email" style="width:100%;" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required> </td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Phone Number : </td>
									<td colspan="2"><input type="text" id="phno" name="phno" class="textarea" placeholder="Phone Number" style="width:100%;" name="phno" pattern="[0-9]{10}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Password : </td>
									<td colspan="2"><input type="password" id="pass" name="pass" class="textarea" style="width:100%;" name="pass" pattern="[A-Za-z0-9]{6,}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Confirm Password : </td>
									<td colspan="2"><input type="password" id="cpass" name="cpass" class="textarea" style="width:100%;" name="cpass" pattern="[A-Za-z0-9]{6,}" required></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Please select from the following:</td>
									<td colspan="2"><input type="radio" class="textarea" id="pfaculty" name="Faculty" value="Permanent faculty" style="width:100%;" required ><p>Permanent</td>
									<td colspan="2"><input type="radio" class="textarea" id="vfaculty" name="Faculty" value="Visiting faculty" style="width:100%;" required ><p>Visiting</td>
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

