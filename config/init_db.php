<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/28/18
 * Time: 9:49 PM
 */
$host = 'localhost';
$user = 'root';
$pass = 'den123';

try {
    $connect = new PDO("mysql:host=$host", $user, $pass);
    $connect->exec('CREATE DATABASE IF NOT EXISTS accounts');
    $connect->exec('CREATE TABLE IF NOT EXISTS `accounts`.`users`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
    `last_name` VARCHAR(50) NOT NULL,
    `email` VARCHAR (100) NOT NULL,
    `password` VARCHAR (100) NOT NULL,
    `hash` VARCHAR(32) NOT NULL,
    `active` BOOL NOT NULL DEFAULT 0,
    PRIMARY KEY (`id`)
)
');
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}