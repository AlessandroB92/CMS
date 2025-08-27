<?php

require_once 'config.php';
//var_dump($config);

$mysqli = new mysqli(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['database']
);
unset($config);

if($mysqli->connect_error) {
    die($mysqli->connect_error);
}