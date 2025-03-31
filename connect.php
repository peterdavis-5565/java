<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "newdb";

$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
    echo "Failed to connect to the database {$db}";
}
