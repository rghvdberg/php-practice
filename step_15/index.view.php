<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Step 15 : Hide Your Scret Passwords</title>
<body>

<ul>
    <?php foreach($tasks as $task) :?>
    
    <li>
        <?php if($task->completed) :?>
            <strike> <?=$task->description; ?></strike>
         
        <?php else :?>
            <?= $task->description; ?>
        
        <?php endif; ?>
    </li>
    
    <?php endforeach; ?>
</ul>
    
</body>
</html>