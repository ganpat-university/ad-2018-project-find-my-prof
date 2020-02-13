<?php
// Initialize the session
session_start();
 include("login3.php");
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
if(isset($_POST['submit'])){

    $enrollment = mysqli_real_escape_string($connection,$_POST['uname']);
    $password = mysqli_real_escape_string($connection,$_POST['pass']);

    if ($enrollment != "" && $password != ""){

        $sql = "select count(enrollment) as cntUser,password from student where uname='".$enrollment."' and password='".$password."'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $enrollment;
            header('Location: contactus.php');
        }else{
            echo "Invalid Enrollment or password";
        }

    }

}
?>