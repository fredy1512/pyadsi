<?php
$servername = "localhost";
$username = "id22341206_fredy";
$password = "Deme71536705*";
$dbname = "id22341206_utea_acsi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   
}
echo "Todo bien";
?>
