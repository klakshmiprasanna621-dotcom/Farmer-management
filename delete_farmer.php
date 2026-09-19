<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM farmers WHERE farmer_id=$id";

if(mysqli_query($conn, $sql)) {
    header("Location: view_farmers.php");
} else {
    echo "Error deleting record";
}

?>