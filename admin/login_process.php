<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your validation logic (e.g., check against a database)
    // For simplicity, let's assume the correct username is "admin" and the password is "password"
    $correctUsername = "admin";
    $correctPassword = "password";

    if ($username === $correctUsername && $password === $correctPassword) {
        header("Location: ../Dashboard_Admin/admin.php");
        exit();
    } else {
        // Display a pop-up message for failed login using JavaScript
        echo "<script>
                alert('Wrong username or password. Please try again.');
                window.location.href = 'login.html'; // Adjust the URL to your login page
              </script>";
    }
}
?>
