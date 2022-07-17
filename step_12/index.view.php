<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Step 12 : Classes 101</title>
</head>
<body>

<ul>
    <?php foreach($tasks as $task) :?>
    
    <li>
        <?php if($task->isCompleted()) :?>
            <strike> <?=$task->getDescription(); ?></strike>
        
        <?php else :?>
            <?= $task->getDescription(); ?>
        
        <?php endif; ?>
    </li>
    
    <?php endforeach; ?>
</ul>
    
</body>
</html>