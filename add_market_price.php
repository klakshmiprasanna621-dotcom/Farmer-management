<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $crop_name = $_POST['crop_name'];
    $market_price = $_POST['market_price'];
    $district = $_POST['district'];
    $price_date = $_POST['price_date'];

    $sql = "INSERT INTO market_prices(crop_name, market_price, district, price_date)
            VALUES('$crop_name', '$market_price', '$district', '$price_date')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Market Price Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Market Price</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Market Price</h1>

    <form method="POST">

        <input type="text" name="crop_name"
        placeholder="Enter Crop Name" required><br><br>

        <input type="number" step="0.01" name="market_price"
        placeholder="Enter Market Price" required><br><br>

        <input type="text" name="district"
        placeholder="Enter District" required><br><br>

        <input type="date" name="price_date" required><br><br>

        <button type="submit" name="submit">
            Add Market Price
        </button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>