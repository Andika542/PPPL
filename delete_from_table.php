<?php
// delete_from_table.php

// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rinasalon";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the ID from the AJAX request
$id = $_POST['id'];

// Perform the deletion (replace 'your_table' with your actual table name)
$sql = "DELETE FROM pesan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
