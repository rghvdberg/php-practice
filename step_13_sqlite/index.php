<?php

require 'functions.php';
require 'Task.php';

$pdo = connectToDB();
$tasks = fetchAllTasks($pdo);

require 'index.view.php';
