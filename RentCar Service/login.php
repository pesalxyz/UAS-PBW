<?php
session_start();

// Dummy credentials
$valid_username = 'admin';
$valid_password = 'password123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Check credentials
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        echo "Login successful. Welcome, $username!";
        // You can redirect to another page here, e.g., header("Location: dashboard.php");
        // exit(); // Make sure to exit after a redirect
    } else {
        echo "Invalid username or password.";
    }
} else {
    echo "Unauthorized access.";
}
?>