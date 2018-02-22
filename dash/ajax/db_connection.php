<?php

// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "id4802122_equipografico"; // MySQL user. eg. root ( if your on localserver)
$password = "P@ntr1st3"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "id4802122_equipografico"; // MySQL Database name

// Connect to MySQL Database 
$db = mysqli_connect($host, $user, $password, $database) or die("Could not connect to database");

// Select MySQL Database 
//mysql_select_db($database, $db);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>