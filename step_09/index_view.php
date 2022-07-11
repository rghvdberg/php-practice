<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 9</title>
</head>

<body>
    <ul>
        <li>
            <strong><?=ucwords('name :')?></strong>
            <!-- ucwords() Uppercase the first character of each word in a string -->
            <?=$task['title'];?>
        </li>
        <li>
            <strong><?=ucwords('due date :')?></strong>
            <?=$task['due'];?>
        </li>
        <li>
            <strong><?=ucwords('personal responsible :')?></strong>
            <?=$task['assigned_to'];?>
        </li>
        <li>
            <strong><?=ucwords('status :')?></strong>
            <?php if ($task['completed']) : ?>
            &#9989
            <?php else : ?>
            &#10063
            <?php endif; ?>
        </li>
    </ul>
</body>

</html>