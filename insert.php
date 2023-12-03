<?php
// Your database connection code goes here
// Example connection code:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rinasalon";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = $_POST['name'];
    // $telp = $_POST['telp'];
    // $tgl = $_POST['tgl'];
    // $jam = $_POST['jam'];
    // $bayar = $_POST['bayar'];
    // $upload = $_POST['chooseFile'];
    $total = $_POST['totalInput'];

    // // Check if interests array is set
    // if (isset($_POST['jasa']) && is_array($_POST['jasa'])) {
    //     $jasa = implode(', ', $_POST['jasa']);
    // } else {
    //     $jasa = "";
    // }

    // echo $name;
    // echo $telp;
    // echo $tgl;
    // echo $jam;
    // echo $total;
    // echo $bayar;
    // echo $jasa;
    echo "Total".$total;

    // //Insert data into the database
    // $sql = "INSERT INTO pesan (jasa, nama, telp, tgl, jam, total, bayar, upload) VALUES ('$jasa', '$name', '$telp', '$tgl', '$jam', '$total', '$bayar', '$upload')";

    // if ($conn->query($sql) === TRUE) {
    //     echo "Data inserted successfully";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
}

$conn->close();
?>
