<?php
// Database configuration
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set custom error handler

$host = 'localhost';
$db = 'chekken';
$user = 'root';
$pass = '123456';

// Create a new mysqli connection
$mysqli = new mysqli($host, $user, $pass, $db);

// Check connection
if ($mysqli->connect_error) {
    die('Connection failed: ' . $mysqli->connect_error);
}
?>
