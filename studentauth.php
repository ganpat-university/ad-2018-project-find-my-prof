<?php
	require 'login3.php';
	//include 'header.php';
	
	function Adddata()
	{
		require ('login3.php');
		$name = $_POST['fname'];
		$email = $_POST['email'];
		$phone = $_POST['phno'];
		$enrollment=$_POST['uname'];
		$password = $_POST['pass'];
		$cpassword = $_POST['cpass'];
		//$radiom=$_POST['Faculty'];
		
		if($password==$cpassword){
			$sql = "INSERT INTO student(name,email,phone,uname,password,cpassword) values ('$name','$email','$phone','$enrollment''$password','$cpassword')";
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