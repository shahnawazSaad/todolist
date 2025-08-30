<?php include 'connect_db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>My To-Do List 🎯</h2>

        <form action="add.php" method="POST">
            <input type="text" name="task" placeholder="Enter a new task" required>
            <button type="submit">Add</button>
        </form>

        <ul>
            <?php
            $result = $conn->query("SELECT * FROM tasks ORDER BY id DESC");
            while($row = $result->fetch_assoc()) {
                echo "<li>".$row['task']." 
                    <a href='delete.php?id=".$row['id']."' onclick=\"return confirm('Delete this task?')\">❌</a>
                    </li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>
