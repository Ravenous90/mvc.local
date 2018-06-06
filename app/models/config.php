<?php
$dsn = "mysql:host=localhost;port=3306;dbname=test;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$username = 'root';
$password = '';