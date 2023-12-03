<?php
include 'connection.php';

$result = $conn->query("SELECT * FROM tb_coba");

echo "<h2>User List</h2>";
echo "<ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['name']} - {$row['email']}</li>";
}
echo "</ul>";

$conn->close();
?>
