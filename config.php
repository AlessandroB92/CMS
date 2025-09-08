<?php

return [
    'mysql_host' => 'localhost',
    'mysql_user' => 'root',
    'mysql_password' => '',
    'mysql_db' => 'corsophp',
    'recordsPerPage' => 10,
    'maxLinks' => 10,
    'orderByColumns' =>
    ['id', 'username', 'fiscalcode', 'age', 'email'],
    'recordsPerPageOptions' =>
    [
        5,
        10,
        15,
        20,
        50,
        100
    ],
    'uploadDir' => 'avatar',
    'mimeTypes' => ['image/jpeg', 'image/png', 'image/gif'],
    'maxFileSize' => convertMaxUploadSizeToBytes(),
    'thumbnailWidth' => 120,
    'intermediateWidth' => 800
];
