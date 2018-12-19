<?php
$Name=$_POST["name"];
$age=$_POST["age"];
$Roll=$_POST["roll"];


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

$sql = "INSERT INTO StudentData (Name, age, Roll) VALUES ('$Name', $age, '$Roll');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
                
?>
  