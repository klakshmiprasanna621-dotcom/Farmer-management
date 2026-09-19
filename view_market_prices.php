<?php
include 'db.php';

$sql = "SELECT * FROM market_prices";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Market Prices</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Market Price Records</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">

        <tr>
            <th>ID</th>
            <th>Crop Name</th>
            <th>Market Price</th>
            <th>District</th>
            <th>Date</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['price_id']; ?></td>
            <td><?php echo $row['crop_name']; ?></td>
            <td><?php echo $row['market_price']; ?></td>
            <td><?php echo $row['district']; ?></td>
            <td><?php echo $row['price_date']; ?></td>
        </tr>

        <?php
        }
        ?>

    </table>

    <br><br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>