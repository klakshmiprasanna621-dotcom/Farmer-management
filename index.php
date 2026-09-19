<?php
session_start();

if(!isset($_SESSION['admin'])) {

    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Farmer Support Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🌾 Farmer Support Management System 🌾</h1>

    <div class="menu">

        <a href="search_farmer.php">🔍 Search Farmer</a>
        
        <a href="add_farmer.php">➕ Add Farmer</a>

        <a href="view_farmers.php">👨‍🌾 View Farmers</a>

        <a href="add_crop.php">🌱 Add Crop</a>

        <a href="view_crops.php">📋 View Crops</a>

        <a href="add_fertilizer.php">🧪 Add Fertilizer</a>

        <a href="view_fertilizers.php">📦 View Fertilizers</a>

        <a href="add_market_price.php">💰 Add Market Price</a>

        <a href="view_market_prices.php">📈 View Market Prices</a>

        <a href="add_scheme.php">🏛️ Add Government Scheme</a>

        <a href="view_schemes.php">📜 View Government Schemes</a>

        <a href="reports.php">📊 View Reports</a>

    </div>

    </div>

</div>
<div class="footer">
    🌾 Farmer Support Management System | DBMS Project

    <div class="bottom-buttons">

        <a href="dashboard.php">⬅ Back to Dashboard</a>

        <a href="logout.php">🚪 Logout</a>

    </div>

</div>
</body>
</html>