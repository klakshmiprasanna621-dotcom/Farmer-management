<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM crops WHERE crop_id=$id";

if(mysqli_query($conn, $sql)) {

    header("Location: view_crops.php");

} else {

    echo "Error deleting crop";
}

?>