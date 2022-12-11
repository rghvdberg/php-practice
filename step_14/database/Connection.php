<?php

class Connection

{
    public static function make()
    {
        try {
            return new PDO("sqlite:../mytodos.db");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}
 
$pdo = Connection::make();