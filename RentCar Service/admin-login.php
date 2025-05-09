<?php
session_start(); // Start a session

// Dummy credentials for demonstration
$valid_username = "admin";
$valid_password = "password123";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate credentials (replace with database check)
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['loggedin'] = true; // Set session variable
        $_SESSION['username'] = $username; // Store username in session
        header("Location: beranda.php"); // Redirect to dashboard
        exit; // Ensure script stops after redirection
    } else {
        echo "<script>alert('Invalid username or password');</script>";
    }
}
?>