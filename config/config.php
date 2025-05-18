<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Site-wide constants
define("SITE_TITLE", "Greenfield School");
define("ADMIN_EMAIL", "your-email@example.com"); 

// Database credentials
define("DB_HOST", "localhost");
define("DB_USER", "root");        
define("DB_PASS", "");             
define("DB_NAME", "school_website");

// Create database connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
