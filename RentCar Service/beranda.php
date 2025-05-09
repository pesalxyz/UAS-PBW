<?php
session_start(); // Start a session
// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: user-login.php"); // Redirect to login if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>RentEase - Sewa Mobil</title>
  <link rel="stylesheet" href="beranda.css">
</head>
<body>
  <header>
    <div class="logo">RentEase</div>
    <nav>
      <a href="beranda.html" class="active">Beranda</a>
      <a href="explore.html">Explore Cars</a>
      <a href="#">About Us</a>
    </nav>
    <div class="info">
      <p><strong>WED, 24 January 2025</strong><br><span>Mon - Sat: 09:00 AM - 06:00PM</span></p>
      <a href="explore.html"><button>Explore</button></a>
    </div>
  </header>

  <main class="hero">
    <div class="left">
      <h1>SEWA MOBIL,<br>KEMUDAHAN DI SETIAP KILOMETER.</h1>
      <p>Lebih dari sekadar rental ini gaya hidup !!!</p>
      <form class="rent-form">
        <input type="text" placeholder="CAR, MODEL, OR BRAND" value="BMW">
        <input type="number" min="1" placeholder="PERSON" value="2">
        <input type="date" value="2025-01-30">
        <input type="date" value="2025-01-30">
        <button type="submit">Rent Now</button>
      </form>
    </div>
    <div class="right">
      <img src="red car.webp" alt="Mobil Merah" />
    </div>
  </main>

  <script src="beranda.js"></script>
</body>
</html>