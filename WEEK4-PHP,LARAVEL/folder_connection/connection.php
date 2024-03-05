<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'userdb';

$con = new mysqli($hostname, $username, $password, $database);

// if (isset($con)){
//     // echo 'It checks whteher the connection is made or not.';
//     echo 'Connection made.';

// }