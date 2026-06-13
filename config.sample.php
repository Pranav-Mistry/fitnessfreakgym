<?php
/**
 * Database & Payment Gateway Configuration Template
 * Copy this file to config.php and enter your credentials.
 */

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'YOUR_DATABASE_PASSWORD');
define('DB_NAME', 'fitnessgym');

// Razorpay Configuration
// TEST MODE (No real money - for development)
define('RAZORPAY_KEY_ID', 'YOUR_RAZORPAY_KEY_ID_HERE');
define('RAZORPAY_KEY_SECRET', 'YOUR_RAZORPAY_KEY_SECRET_HERE');

// LIVE MODE (Real money - uncomment when ready)
// define('RAZORPAY_KEY_ID', 'rzp_live_YOUR_LIVE_KEY_HERE');
// define('RAZORPAY_KEY_SECRET', 'YOUR_LIVE_SECRET_KEY_HERE');

// Application Settings
define('APP_NAME', 'Fitness Freak Gym');
define('TIMEZONE', 'Asia/Kolkata');

// Database Connection Function
function getDBConnection() {
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    return $conn;
}

// Security: Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set timezone
date_default_timezone_set(TIMEZONE);
?>
