<?php require "task.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Project</title>
</head>
<body>
    <ul>
        <?php foreach ($tasks as $task):?>
        <?php  if($task->isComplete()):?>
        <li><del><?php echo $task->description(); ?></del></li>
        <?php else: ?>
        <li><?php echo $task->description(); ?></li>
        <?php endif; ?>
        <?php endforeach;?>
    </ul>
</body>
</html>