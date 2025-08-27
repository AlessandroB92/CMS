<?php
require_once 'connection.php';

function getRandName()
{
    $names = [
        'John',
        'Jane',
        'Alice',
        'Bob',
        'Charlie',
        'Diana',
        'Ethan',
        'Fiona',
        'George',
        'Hannah'
    ];
    $lastnames = [
        'Smith',
        'Johnson',
        'Williams',
        'Jones',
        'Brown',
        'Davis',
        'Miller',
        'Wilson',
        'Moore',
        'Taylor'
    ];

    $rand1 = mt_rand(0, count($names) - 1);
    $rand2 = mt_rand(0, count($lastnames) - 1);
    return $names[$rand1] . ' ' . $lastnames[$rand2];
}

//echo getRandName();

function getRandEmail($name)
{
    $domains = ['google.com', 'yahoo.com', 'hotmail.com'];
    $rand1 = mt_rand(0, count($domains) - 1);
    return strtolower(str_replace(' ', '.', $name) . mt_rand(10, 99) . '@' . $domains[$rand1]);
}

//echo getRandEmail(getRandName());

function getRandFiscalCode()
{
    $i = 16;
    $res = '';

    while ($i > 0) {
        $res .= chr(mt_rand(65, 90));

        $i--;
    }
    return $res;
}

//echo getRandFiscalCode();

function getRandAge()
{
    return mt_rand(0, 100);
}
//echo getRandAge();

function insertRandUsers($totale, $mysqli)
{
    while ($totale < 6) {
        // Generate random user data
        $username   = getRandName();
        $email      = getRandEmail($username);
        $fiscalCode = getRandFiscalCode();
        $age        = getRandAge();

        $sql = 'INSERT INTO users (username, email, fiscalcode, age) VALUES ';
        $sql .= "('$username', '$email', '$fiscalCode', $age)";

        $res = $mysqli->query($sql);
        if (!$res) {
            echo $mysqli->error;
        } else {
            $totale++;
        }
    }
    echo "Inserted $totale random users.\n";
}

insertRandUsers(5, $mysqli);
