<?php include 'database/db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple To-Do List</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <div>
        <h1>To-Do List by Darva</h1>

        <div class="form-group-task">
            <form action="add.php" method="POST">
                <input type="text" name="task" placeholder="New task" required>
                <button type="submit">Add</button>
            </form>
        </div>

        <table class="task-table">
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = $conn->query("SELECT * FROM tasks");
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td class='task-text'>{$row['task']}</td>";

                    // Status checkbox
                    $checked = $row['status'] ? 'checked' : '';
                    $statusClass = $row['status'] ? 'completed' : 'incomplete';
                    echo "<td>
                    <label class='status-checkbox'>
                        <input type='checkbox' {$checked} onclick='toggleStatus({$row['id']}, this)'>
                        <span class='checkmark'></span>
                    </label>
                  </td>";

                    echo "<td><a href='edit.php?id={$row['id']}' class='edit-btn'><i class='fas fa-edit'></i></a></td>";
                    echo "<td><a href='delete.php?id={$row['id']}' class='delete-btn'><i class='fas fa-trash'></i></a></td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <script src="assets/script.js"></script>
    </div>
</body>

</html>