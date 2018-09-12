<?php
// Database credentials.
define('DB_SERVER', 'viniciuspontes.ch:3306');
define('DB_USERNAME', 'vinic_portal');
define('DB_PASSWORD', 'fleisch1234');
define('DB_NAME', 'vinicius_gamingportal');

// Try to connect to database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("Fehler: DB konnte nicht erreicht werden. " . mysqli_connect_error());
}
?>