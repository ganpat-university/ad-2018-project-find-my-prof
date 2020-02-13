<?php

$connection=mysqli_connect('localhost','root','12345','user7_login');
if ($connection->connect_error) 
{
    die("Connection failed: " . $connection->connect_error);
}
?>