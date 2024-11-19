<?php

// Database configuration
$host = 'localhost';
$port = '3306';
$dbname = 'pedalevents1';
$username = 'william';
$pass = 'root';

// Connection string (DSN)
$dsn = "mysql:host={$host};port={$port};dbname={$dbname};charset=utf8";

try {
  // Create a PDO instance
  $pdo = new PDO($dsn, $username, $pass);

  // Set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
  // If there is an error with the connection, catch it here
  echo "Connection failed: " . $e->getMessage();
}
