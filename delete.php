<?php
$table = filter_input(INPUT_POST, 'table');
$keyIDName = filter_input(INPUT_POST, 'keyIDName');
$keyIDValue = filter_input(INPUT_POST, 'keyIDValue');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurant";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete value
$sql = "DELETE FROM $table WHERE $keyIDName=$keyIDValue";

if ($conn->query($sql) === TRUE) {
    echo "Deletion successful";
} else {
    echo "Error deleting " . $conn->error;
}



mysqli_close($conn);
include('index.html');
?>