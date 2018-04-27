<?php

    $dsn        = "mysql://hostname=localhost;dbname=oop_firsttmp";
    $username   = "root";
    $password   = "";
    $options    = array(
        PDO::ATTR_ERRMODE               => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND    => 'SET NAMES UTF8' );

    try {
        $conn = new PDO($dsn, $username, $password, $options);
    } catch (PDOException $e) {
        echo "Error connection with database";
    }
