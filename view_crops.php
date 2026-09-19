<?php
include 'db.php';

$sql = "SELECT * FROM crops";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Crops</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Crop Records</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">

        <tr>
            <th>Crop ID</th>
            <th>Farmer ID</th>
            <th>Crop Name</th>
            <th>Season</th>
            <th>Soil Type</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['crop_id']; ?></td>
            <td><?php echo $row['farmer_id']; ?></td>
            <td><?php echo $row['crop_name']; ?></td>
            <td><?php echo $row['season']; ?></td>
            <td><?php echo $row['soil_type']; ?></td>
            <td>
                <a href="edit_crop.php?id=<?php echo $row['crop_id']; ?>">
                    Edit
                </a>
            </td>

            <td>
                <a href="delete_crop.php?id=<?php echo $row['crop_id']; ?>">
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