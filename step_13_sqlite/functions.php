<?php

function connectToDB()
{
    try {
        return new PDO("sqlite:../mytodos.db");
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');
}
