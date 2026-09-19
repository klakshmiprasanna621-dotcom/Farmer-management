<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM farmers WHERE farmer_id=$id";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if(isset($_POST['update'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $village = $_POST['village'];
    $land_size = $_POST['land_size'];

    $update_sql = "UPDATE farmers
                   SET name='$name',
                       phone='$phone',
                       village='$village',
                       land_size='$land_size'
                   WHERE farmer_id=$id";

    if(mysqli_query($conn, $update_sql)) {
        header("Location: view_farmers.php");
    } else {
        echo "Error updating record";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Farmer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Edit Farmer</h1>

    <form method="POST">

        <input type="text" name="name"
        value="<?php echo $row['name']; ?>" required><br><br>

        <input type="text" name="phone"
        value="<?php echo $row['phone']; ?>" required><br><br>

        <input type="text" name="village"
        value="<?php echo $row['village']; ?>" required><br><br>

        <input type="text" name="land_size"
        value="<?php echo $row['land_size']; ?>" required><br><br>

        <button type="submit" name="update">
            Update Farmer
        </button>

    </form>

</div>

</body>
</html>