<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Makanan Khas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Makanan Khas</h2>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="makanan.php">Makanan Khas</a>
        <a href="logout.php">Keluar</a>
    </nav>
</header>

<div class="content"><?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Makanan Khas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>Makanan Khas</h2>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="makanan.php">Makanan Khas</a>
        <a href="logout.php">Keluar</a>
    </nav>
</header>

<div class="content">
    <h3>Daftar Makanan Khas</h3>
    <ul>
        <li>Coto Makassar</li>
        <li>Pallubasa</li>
        <li>Sop Saudara</li>
        <li>Konro Bakar</li>
    </ul>
</div>

<footer>
    <p>FOOTER</p>
</footer>
</body>
</html>

    <h3>Daftar Makanan Khas</h3>
    <ul>
        <li>Coto Makassar</li>
        <li>Pallubasa</li>
        <li>Sop Saudara</li>
        <li>Konro Bakar</li>
    </ul>
</div>

<footer>
    <p>FOOTER</p>
</footer>
</body>
</html>
