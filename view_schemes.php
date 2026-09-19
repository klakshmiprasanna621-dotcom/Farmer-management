<?php
include 'db.php';

$sql = "SELECT * FROM government_schemes";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Government Schemes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Government Scheme Records</h1>

    <table border="1" cellpadding="10" cellspacing="0" align="center">

        <tr>
            <th>ID</th>
            <th>Scheme Name</th>
            <th>Eligibility</th>
            <th>Benefits</th>
            <th>Last Date</th>
        </tr>

        <?php
        while($row = mysqli_fetch_assoc($result)) {
        ?>

        <tr>
            <td><?php echo $row['scheme_id']; ?></td>
            <td><?php echo $row['scheme_name']; ?></td>
            <td><?php echo $row['eligibility']; ?></td>
            <td><?php echo $row['benefits']; ?></td>
            <td><?php echo $row['last_date']; ?></td>
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