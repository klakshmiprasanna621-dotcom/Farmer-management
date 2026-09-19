<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $village = $_POST['village'];
    $land_size = $_POST['land_size'];

    $sql = "INSERT INTO farmers(name, phone, village, land_size)
            VALUES('$name', '$phone', '$village', '$land_size')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Farmer Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Farmer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Farmer</h1>

    <form method="POST">

        <input type="text" name="name" placeholder="Enter Farmer Name" required><br><br>

        <input type="text" name="phone" placeholder="Enter Phone Number" required><br><br>

        <input type="text" name="village" placeholder="Enter Village" required><br><br>

        <input type="text" name="land_size" placeholder="Enter Land Size" required><br><br>

        <button type="submit" name="submit">Add Farmer</button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>