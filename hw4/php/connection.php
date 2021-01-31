<?php
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_error) {
    die("Connection is done: " . $mysqli->connect_error);
}


?>
