<?php 

$name = 'Rob van den Berg';
// nl2br Inserts HTML line breaks before all newlines in a string
echo nl2br("Hello, $name\n");
echo nl2br("Hello, {$name}\n"); // curly braces for readability 
echo 'Hello, ' . $name;
