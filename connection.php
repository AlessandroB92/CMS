<?php

$config = require 'config.php';

$mysqli = new mysqli(
    $config['host'],
    $config['username'],
    $config['password'],
    $config['database']
);

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
