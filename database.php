<?php

$host = "localhost";
$dbname = "ehafiz";
$username = "root";
$password = "";

$mysqli = new mysql($host , $username, $password);

//new mysqli(hostname: $host,
//username: $username,
//password: $password,
//database: $dbname);
                     
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
