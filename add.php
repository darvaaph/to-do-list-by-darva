<?php
include 'database/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $task = $_POST['task'];
    $conn->query("INSERT INTO tasks (task) VALUES ('$task')");
}

header('Location: index.php');
?>
