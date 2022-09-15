<?php
$host = 'db';
$username = 'root';
$password = 'mypass';
 
$conn = mysqli_connect($host, $username, $password);
if (!$conn) {
    exit('Connection failed: '.mysqli_connect_error().PHP_EOL);
}
 
echo 'Successful database connection!'.PHP_EOL;