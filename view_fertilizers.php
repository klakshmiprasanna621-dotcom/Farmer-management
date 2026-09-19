<?php
include 'db.php';

$sql = "SELECT * FROM fertilizers";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Fertilizers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Fertilizer Records</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">

        <tr>
            <th>ID</th>
            <th>Crop Name</th>
            <th>Fertilizer Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['fertilizer_id']; ?></td>
            <td><?php echo $row['crop_name']; ?></td>
            <td><?php echo $row['fertilizer_name']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <a href="edit_fertilizer.php?id=<?php echo $row['fertilizer_id']; ?>">
                    Edit
                </a>
            </td>

            <td>
                <a href="delete_fertilizer.php?id=<?php echo $row['fertilizer_id']; ?>">
                    Delete
                </a>
            </td>
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