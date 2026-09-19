<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM fertilizers
        WHERE fertilizer_id=$id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {

    $crop_name = $_POST['crop_name'];
    $fertilizer_name = $_POST['fertilizer_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $update_sql = "UPDATE fertilizers
                   SET crop_name='$crop_name',
                       fertilizer_name='$fertilizer_name',
                       quantity='$quantity',
                       price='$price'
                   WHERE fertilizer_id=$id";

    if(mysqli_query($conn, $update_sql)) {

        header("Location: view_fertilizers.php");

    } else {

        echo 'Error updating fertilizer';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Fertilizer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

<h1>🧪 Edit Fertilizer</h1>

<form method="POST">

<input type="text" name="crop_name"
value="<?php echo $row['crop_name']; ?>" required><br><br>

<input type="text" name="fertilizer_name"
value="<?php echo $row['fertilizer_name']; ?>" required><br><br>

<input type="text" name="quantity"
value="<?php echo $row['quantity']; ?>" required><br><br>

<input type="number" step="0.01" name="price"
value="<?php echo $row['price']; ?>" required><br><br>

<button type="submit" name="update">
    Update Fertilizer
</button>

</form>

</div>

</body>
</html>