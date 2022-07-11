<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 7</title>
</head>

<body>
    <ul>
        <?php foreach($task as $item => $val) : ?>
        <li>
            <strong>
                <?= $item; ?>
            </strong>
            <?= $val; ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>