<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "JO0.1";

// اتصال به MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// بررسی اتصال
if ($conn->connect_error) {
    die("اتصال ناموفق: " . $conn->connect_error);
}
?>