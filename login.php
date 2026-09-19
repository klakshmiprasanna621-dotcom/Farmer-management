<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare(
        $conn,
        "SELECT username, password FROM admin WHERE username = ?"
    );

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $row['password'])) {

            $_SESSION['admin'] = $row['username'];

            header("Location: dashboard.php");
            exit();

        } else {

            echo "<script>alert('Invalid Username or Password');</script>";
        }

    } else {

        echo "<script>alert('Invalid Username or Password');</script>";
    }

    mysqli_stmt_close($stmt);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>🔐 Admin Login</h1>

    <form method="POST">

        <input type="text"
               name="username"
               placeholder="Enter Username"
               required><br><br>

        <input type="password"
               name="password"
               placeholder="Enter Password"
               required><br><br>

        <button type="submit" name="login">
            Login
        </button>

    </form>

</div>

</body>
</html>