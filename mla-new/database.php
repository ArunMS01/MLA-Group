<?php
// Check if the $conn variable is not set or if it's not an instance of mysqli
if (!isset($conn) || !($conn instanceof mysqli)) {
    // Error reporting configuration
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // Database configuration
    define('DB_HOST', 'localhost'); // Replace with your database host
    define('DB_USERNAME', 'root'); // Replace with your database username
    define('DB_PASSWORD', ''); // Replace with your database password
    define('DB_NAME', 'mla'); // Replace with your database name

    // Establish database connection
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check for connection errors
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
}

if (!defined('Base_url')) {
    define('Base_url', 'http://localhost/MLA-Group/mla-new/admin/');
}
?>
