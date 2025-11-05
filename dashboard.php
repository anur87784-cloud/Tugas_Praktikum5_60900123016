<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Dashboard</h2>
    <div class="user-info">Hi, <?php echo $username; ?></div>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="makanan.php">Makanan Khas</a>
        <a href="logout.php">Keluar</a>
    </nav>
</header>

<div class="content">
    <h3>Anda telah berhasil login</h3>
</div>

<footer>
    <p>FOOTER</p>
</footer>
</body>
</html>
