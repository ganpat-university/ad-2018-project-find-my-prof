 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style type="text/css">
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
	include 'header.php';
?>
    <div>
			<form action="loginauthen.php" method="post">
				<fieldset style="width:450px;height:auto;margin:auto;margin-top:85px;border-radius:4px;">
					<legend align="center"><b>Fill up the Details</></legend>
					<table style="margin:0 auto;">
							<tr>
								<td colspan="2"><b>Username:</td>
									<td colspan="2"><input type="text" class="textarea" id="uname" name="uname" placeholder="Username" style="width:100%;" name="fname" pattern="[A-Za-z ]+" required ></td>
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="2"><b>Password:</td>
									<td colspan="2"><input type="password" class="textarea" id="pass" name="pass" placeholder="Password" style="width:100%;" name="email" required> </td>
									
							</tr>
							<tr><td><br/></td></tr>
							<tr>
								<td colspan="4" align="center"><input type="submit" name="submit" id="submit" class="button" id="btn" value="Submit"></td>
							</tr>
							
        </form>
		
    </div>    
	
</body>
</html>