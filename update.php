<?php
include 'database/db.php';

// Ambil data dari form edit
$id = $_POST['id'];
$task = $_POST['task'];

// Update data task di database
$conn->query("UPDATE tasks SET task='$task' WHERE id=$id");

header('Location: index.php');
?>
