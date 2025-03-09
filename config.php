<?php
$servername = "192.168.1.172";
$username = "admin";
$password = "123";
$dbname = "smarttech";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}
?>