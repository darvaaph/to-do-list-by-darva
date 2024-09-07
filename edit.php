<?php
include 'database/db.php';

// Ambil id dari task yang ingin diedit
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tasks WHERE id=$id");
$task = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div>
        <h1>Edit Task</h1>

        <!-- Form untuk mengedit task -->
        <div class="form-group-task">
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $task['id']; ?>">
                <input type="text" name="task" value="<?php echo $task['task']; ?>" required>
                <button type="submit">Update</button>
            </form>
        </div>

        <a href="index.php">Back to List</a>
    </div>
</body>

</html>