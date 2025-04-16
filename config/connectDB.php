<?php

/**
 * connection db
 */

function connect()
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=recent", "recent", "123456");
        return $connection;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
