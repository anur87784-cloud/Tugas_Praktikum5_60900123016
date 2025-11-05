<?php
session_start();
include "users.php";

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username])) {
        if ($users[$username] === $password) {
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Password yang dimasukkan salah";
        }
    } else {
        $error = "Username tidak terdaftar";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h2>HEADER</h2>
</header>

<div class="content">
    <h3>Login</h3>
    <form method="POST">
        <label>Username</label><br>
        <input type="text" name="username" required><br><br>
        <label>Password</label><br>
        <input type="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <p style="color:red;"><?php echo $error; ?></p>
</div>

<footer>
    <p>FOOTER</p>
</footer>
</body>
</html>
