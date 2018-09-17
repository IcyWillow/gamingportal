<?php
// Database credentials.
define('DB_SERVER', 'localhost:3307');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gamingportal');
// Try to connect to database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){
    die("Fehler: DB konnte nicht erreicht werden. " . mysqli_connect_error());
}
?>