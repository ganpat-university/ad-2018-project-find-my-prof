 <?php
$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$username = trim($_POST["user"]);
echo "\nyour name is :-     $username";
$sql = "INSERT INTO user VALUES ('$username')";





?> 

