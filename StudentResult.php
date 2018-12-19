<?php
$roll=$_POST["roll"];
$per=$_POST["per"];
$clas=$_POST["clas"];


$servername = "localhost";
$username = "nayan";
$password = "nayan";
$dbname = "Student";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO StudentResult (Roll, Percent , class) VALUES ('$roll', '$per', '$clas');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
                
?>
  