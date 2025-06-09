<?php
$tasks = file_exists('tasks.json') ? json_decode(file_get_contents('tasks.json'), true) : [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newTask = trim($_POST['task'] ?? '');
    if ($newTask) {
        $tasks[] = ['task' => $newTask, 'done' => false];
        file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
        header('Location: index.php');
        exit;
    }
}

if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    unset($tasks[$id]);
    $tasks = array_values($tasks);
    file_put_contents('tasks.json', json_encode($tasks, JSON_PRETTY_PRINT));
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        li { margin-bottom: 8px; }
    </style>
</head>
<body>
    <h1>📝 Task Manager</h1>
    <form method="post">
        <input name="task" placeholder="Enter new task" required>
        <button>Add</button>
    </form>
    <ul>
        <?php foreach ($tasks as $index => $t): ?>
            <li><?= htmlspecialchars($t['task']) ?> 
                <a href="?delete=<?= $index ?>" style="color:red">[X]</a>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
