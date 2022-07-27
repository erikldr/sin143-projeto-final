<?php
//Configurações da conexão
$servername = "localhost";
$username = "clausius";
$password = "clausiuspwd";
$dbname = "sin143_laravel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error)
}
?>