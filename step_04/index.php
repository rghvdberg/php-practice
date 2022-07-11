<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Step 4</title>
    <style>
    header {
        background: #e3e3e3;
        padding: 2em;
        text-align: center;
    }
    </style>

</head>

<body>
    <header>
        <h1><?php 
        // use url http://localhost:8888/?name=Rob 
        $greeting = 'Hello';
        $name = $_GET['name'];
        echo $greeting . ', ' . $name
        ?></h1>

        <! -- short version -->
        <h1><?= "Hello, " . htmlspecialchars($_GET['name']);?></h1>
    </header>
</body>

</html>