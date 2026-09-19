<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $crop_name = $_POST['crop_name'];
    $fertilizer_name = $_POST['fertilizer_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $sql = "INSERT INTO fertilizers(crop_name, fertilizer_name, quantity, price)
            VALUES('$crop_name', '$fertilizer_name', '$quantity', '$price')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Fertilizer Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Fertilizer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Fertilizer</h1>

    <form method="POST">

        <input type="text" name="crop_name"
        placeholder="Enter Crop Name" required><br><br>

        <input type="text" name="fertilizer_name"
        placeholder="Enter Fertilizer Name" required><br><br>

        <input type="text" name="quantity"
        placeholder="Enter Quantity" required><br><br>

        <input type="number" step="0.01" name="price"
        placeholder="Enter Price" required><br><br>

        <button type="submit" name="submit">
            Add Fertilizer
        </button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>