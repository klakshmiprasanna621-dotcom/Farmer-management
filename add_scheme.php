<?php
include 'db.php';

if(isset($_POST['submit'])) {

    $scheme_name = $_POST['scheme_name'];
    $eligibility = $_POST['eligibility'];
    $benefits = $_POST['benefits'];
    $last_date = $_POST['last_date'];

    $sql = "INSERT INTO government_schemes
            (scheme_name, eligibility, benefits, last_date)
            VALUES
            ('$scheme_name', '$eligibility', '$benefits', '$last_date')";

    if(mysqli_query($conn, $sql)) {
        echo "<script>alert('Scheme Added Successfully');</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Government Scheme</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Add Government Scheme</h1>

    <form method="POST">

        <input type="text" name="scheme_name"
        placeholder="Enter Scheme Name" required><br><br>

        <input type="text" name="eligibility"
        placeholder="Enter Eligibility" required><br><br>

        <input type="text" name="benefits"
        placeholder="Enter Benefits" required><br><br>

        <input type="date" name="last_date" required><br><br>

        <button type="submit" name="submit">
            Add Scheme
        </button>

    </form>

    <br>

    <a href="index.php">Back to Home</a>

</div>

</body>
</html>