<?php
include 'koneksi.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username'] ?? '');
    $password = $_POST['password_hash'] ?? '';

    // Ambil user berdasarkan username
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($koneksi, $query);

    if ($result && mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        // Cocokkan password dari input dengan password di database
        if ($password === $row['password_hash']) {
            $_SESSION['username'] = $username;
            
            // Redirect berdasarkan role
            if ($row['role'] === 'admin') {
                header("Location: beranda.html");
                exit();
            } elseif ($row['role'] === 'employee') {
                header("Location: beranda.html");
                exit();
            } elseif ($row['role'] === 'customer') {
                header("Location: beranda.html");
                exit();
            } else {
                echo "Role tidak dikenal.";
            }
        } else {
            echo "Password salah.";
        }
    } else {
        echo "User tidak ditemukan.";
    }
} else {
    echo "Akses tidak diizinkan.";
}
?>
