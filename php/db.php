<?php

$server = "127.0.0.1";
$user = "root";
$pass = "seats3d";



try {
    $db = new PDO("mysql:host=$server;dbname=test1", $user, $pass);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>