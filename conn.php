<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'booking_page';

$options = [
    PDO::ATTR_PERSISTENT => true,
];
$conn = new PDO("mysql:host=$dbhost; dbname=$dbname", $dbuser, $dbpass, $options);

if ($conn == false) {
    echo "Try again";

}





