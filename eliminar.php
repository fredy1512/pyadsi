<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: mostrar.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>