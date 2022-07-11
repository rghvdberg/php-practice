<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 6</title>
</head>

<body>
    <ul>
        <?php 
        foreach ($names as $name)
         {
            echo "<li>$name</li>";
         }
        ?>
    </ul>
    <hr>
    <ul>
        <?php foreach($names as $name) : ?>
        <li>
            <?= $name; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>