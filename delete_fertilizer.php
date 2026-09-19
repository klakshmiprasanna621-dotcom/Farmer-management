<?php

include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM fertilizers
        WHERE fertilizer_id=$id";

if(mysqli_query($conn, $sql)) {

    header("Location: view_fertilizers.php");

} else {

    echo "Error deleting fertilizer";
}

?>