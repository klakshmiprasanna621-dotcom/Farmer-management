<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Farmer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>🔍 Search Farmer</h1>

    <form method="POST">

        <input type="text" name="search"
        placeholder="Enter Farmer Name" required><br><br>

        <button type="submit" name="submit">
            Search
        </button>

    </form>

    <br><br>

<?php

if(isset($_POST['submit'])) {

    $search = $_POST['search'];

    $sql = "SELECT * FROM farmers
            WHERE name LIKE '%$search%'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {

        echo "<table border='1' cellpadding='10' cellspacing='0' align='center'>";

        echo "
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Village</th>
            <th>Land Size</th>
        </tr>
        ";

        while($row = mysqli_fetch_assoc($result)) {

            echo "
            <tr>
                <td>".$row['farmer_id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['phone']."</td>
                <td>".$row['village']."</td>
                <td>".$row['land_size']."</td>
            </tr>
            ";
        }

        echo "</table>";

    } else {

        echo "<h3>No Farmer Found</h3>";
    }
}
?>

    <br><br>

    <a href='index.php'>Back to Home</a>

</div>

</body>
</html>