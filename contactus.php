<html>
	<head>
		<title></title>
		<link rel="stylesheet" src="text/css" href="contactUS.css">
	</head>
	<body>
		<?php
			session_start();
			if(isset($_SESSION['user'])){
				echo "\n\n\n\n\n\n".$_SESSION['user'];
				include 'header1.php';
			}
		else{
				include 'header.php';
			}
		?>
		<div class="content" align="Left">
			<h1 align="center">&nbsp;Team</h1>
			<div class="Team" align="center">
					<div class="section">
						<img src="" width="200px" height="226px"/>
						<p><b>Rahul Goswami</b></p>
						<p><b>Phone No:</b> +91 7600618836</p>
						<p><b>Email:</b> rahulgoswami.rg2000@gmail.com</p>
						<br>
						<br>
						<img src="C:\php\www\findmy\yashvi.png" width="200px" height="226px"/>
						<p><b>Yashvi Amin</b></p>
						<p><b>Phone No:</b> +91 9016289557</p>
						<p><b>Email:</b> yashviamin152@gmail.com</p>		
						<br>
						<br>
						<img src="C:\php\www\findmy\prachi.png" width="200px" height="226px"/>
						<p><b>Prachi Bhatt</b></p>
						<p><b>Phone No:</b> +91 9427230208</p>
						<p><b>Email:</b> prachijbhatt10@gmail.com</p>
						<br>
						<br>
					</div>
			</div>
		</div>
	</body>
</html>
