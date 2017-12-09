<?php

$db_host = 'your_database_host';
$db_name = 'your_database_name';
$db_user = 'your_database_username';
$db_pass = 'your_password_here';

return [
    'db_dsn' => "mysql:host=$db_host; dbname=$db_name",
    'db_user' => $db_user,
    'db_pass' => $db_pass,
];