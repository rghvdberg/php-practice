<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 7</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>

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