<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 8</title>
</head>

<body>
    <ul>
        <li>
            <strong><?=ucwords('name :')?></strong> <!-- ucwords() Uppercase the first character of each word in a string -->
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
            <?=$task['completed']?'complete':'incomplete';?> <!-- ternary operator -->
        </li>
    </ul>
</body>

</html>