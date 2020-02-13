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

    $username = mysqli_real_escape_string($connection,$_POST['uname']);
    $password = mysqli_real_escape_string($connection,$_POST['pass']);

    if ($username != "" && $password != ""){

        $sql = "select count(name) as cntUser,password from professor where name='".$username."' and password='".$password."'";
        $result = mysqli_query($connection,$sql);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $username;
            header('Location: contactus.php');
        }else{
            echo "Invalid username or password";
        }

    }

}
?>