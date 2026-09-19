<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $farmer_id = $_POST['farmer_id'];
    $crop_name = $_POST['crop_name'];
    $season = $_POST['season'];
    $soil_type = $_POST['soil_type'];

    $sql = "INSERT INTO crops(farmer_id, crop_name, season, soil_type)
            VALUES('$farmer_id', '$crop_name', '$season', '$soil_type')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Crop Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Crop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Crop</h1>

    <form method="POST">

        <input type="number" name="farmer_id"
        placeholder="Enter Farmer ID" required><br><br>

        <input type="text" name="crop_name"
        placeholder="Enter Crop Name" required><br><br>

        <input type="text" name="season"
        placeholder="Enter Season" required><br><br>

        <input type="text" name="soil_type"
        placeholder="Enter Soil Type" required><br><br>

        <button type="submit" name="submit">
            Add Crop
        </button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>