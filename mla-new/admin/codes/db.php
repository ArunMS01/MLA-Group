<?php
// Check if the $db variable is not set or if it's not an instance of mysqli
if (!isset($db) || !($db instanceof mysqli)) {
    // Error reporting configuration
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    // Database configuration
    define('DB_HOST', '103.212.120.31'); // Replace with your database host
    define('DB_USERNAME', 'ictdzfbe_mlagroup'); // Replace with your database username
    define('DB_PASSWORD', 'w@tAkKxCGFcH'); // Replace with your database password
    define('DB_NAME', 'ictdzfbe_mlagroup'); // Replace with your database name

    // Establish database connection
    $db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Check for connection errors
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
}

if (!defined('Base_url')) {
    define('Base_url', 'https://maidenstride.in/mla-new/admin/');
}
?>
