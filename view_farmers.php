<?php
include 'db.php';

$sql = "SELECT * FROM farmers";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Farmers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Farmer Records</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Village</th>
            <th>Land Size</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>

        <?php

        while($row = mysqli_fetch_assoc($result)) {

        ?>

        <tr>
            <td><?php echo $row['farmer_id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['village']; ?></td>
            <td><?php echo $row['land_size']; ?></td>
            <td>
                <a href="edit_farmer.php?id=<?php echo $row['farmer_id']; ?>">
                    Edit
                </a>
            </td>

            <td>
                <a href="delete_farmer.php?id=<?php echo $row['farmer_id']; ?>">
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