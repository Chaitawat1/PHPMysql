<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn ->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "DELETE FROM MyGuests WHERE id=2";

if ($conn->query($sql) === TRUE){
    echo "New delete successfully";
}
else{
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>