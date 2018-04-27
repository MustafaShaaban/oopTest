<?php

    require_once "connection.php"; // include database connection file
    include "template/header.php"; // include main header

    // get all Classes
    spl_autoload_register(function($className) {
        require 'classes/' .$className . '.php';
    });