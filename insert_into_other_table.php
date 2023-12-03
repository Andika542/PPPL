<?php

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

// Perform the insertion into another table (replace 'other_table' with your actual table name)
$sql = "INSERT INTO konfirm (jasa, nama, telp, tgl, jam, total, bayar) SELECT jasa, nama, telp, tgl, jam, total, bayar FROM pesan WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully into other table";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
