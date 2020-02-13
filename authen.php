<?php
	require 'login3.php';
	//include 'header.php';
	
	function Adddata()
	{
		require ('login3.php');
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phno'];
		//$Enrollment=$_POST['enroll'];
		$password = $_POST['pass'];
		$cpassword = $_POST['cpass'];
		$radiom=$_POST['Faculty'];
		
		if($password==$cpassword){
			$sql = "INSERT INTO professor(name,email,phone,password,cpassword,faculty) values ('$name','$email','$phone','$password','$cpassword','$radiom')";
			if ($connection->query($sql) === TRUE) 
			{
				header("location:contactus.php");
			}
			else
			{
				
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