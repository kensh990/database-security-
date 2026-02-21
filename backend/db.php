<?php
$conn = new mysqli("localhost", "root", "", "simple_auth");

if ($conn->connect_error) {
    die("Database connection failed.");
}
?>
