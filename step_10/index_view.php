<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 10</title>
</head>

<body>
    You are <?=$age; ?>.<br>
    That is
    <?= checkAge($age) ? 'old enough ' : 'not old enough ' ; ?>
    to watch this movie.
</body>

</html>