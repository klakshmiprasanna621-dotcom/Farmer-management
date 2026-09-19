<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>📊 System Reports</h1>

<?php

// Total Farmers
$sql1 = "SELECT COUNT(*) AS total_farmers FROM farmers";
$result1 = mysqli_query($conn, $sql1);
$row1 = mysqli_fetch_assoc($result1);

// Total Crops
$sql2 = "SELECT COUNT(*) AS total_crops FROM crops";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);

// Total Fertilizers
$sql3 = "SELECT COUNT(*) AS total_fertilizers FROM fertilizers";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_assoc($result3);

// Average Market Price
$sql4 = "SELECT AVG(market_price) AS avg_price FROM market_prices";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_assoc($result4);

?>

<table border="1" cellpadding="15" cellspacing="0" align="center">

<tr>
    <th>Report Type</th>
    <th>Value</th>
</tr>

<tr>
    <td>Total Farmers</td>
    <td><?php echo $row1['total_farmers']; ?></td>
</tr>

<tr>
    <td>Total Crops</td>
    <td><?php echo $row2['total_crops']; ?></td>
</tr>

<tr>
    <td>Total Fertilizers</td>
    <td><?php echo $row3['total_fertilizers']; ?></td>
</tr>

<tr>
    <td>Average Market Price</td>
    <td><?php echo round($row4['avg_price'], 2); ?></td>
</tr>

</table>

<br><br>

<h2>🌱 Crop Count Report</h2>

<?php

$sql5 = "SELECT crop_name, COUNT(*) AS total
         FROM crops
         GROUP BY crop_name";

$result5 = mysqli_query($conn, $sql5);

?>

<table border="1" cellpadding="15" cellspacing="0" align="center">

<tr>
    <th>Crop Name</th>
    <th>Total Count</th>
</tr>

<?php
while($row5 = mysqli_fetch_assoc($result5)) {
?>

<tr>
    <td><?php echo $row5['crop_name']; ?></td>
    <td><?php echo $row5['total']; ?></td>
</tr>

<?php
}
?>

</table>

<br><br>

<a href="index.php">🏠 Back to Home</a>

</div>

</body>
</html>