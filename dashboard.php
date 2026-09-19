<?php
session_start();

if(!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🌾 Admin Dashboard 🌾</h1>

    <div class="menu">

        <a href="index.php">🌾 Open Farmer System</a>

        <a href="logout.php">🚪 Logout</a>

    </div>

</div>

</body>
</html>