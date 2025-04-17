<?php

/**
 * connection db
 */

function connect()
{
    try {
        $connection = new PDO("mysql:host=localhost;dbname=recent", "imran_opp", "123456789");
        return $connection;
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
}
