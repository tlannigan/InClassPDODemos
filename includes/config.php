<?php
    // Site configuration file

    // Define the site location
    define('SITE_URI', '/InClassPDODemos/');
    
    // Start the session
    session_start();
    
    // Start output buffering
    //ob_start();
    
    // Get database connection information
    $root = dirname($_SERVER['DOCUMENT_ROOT']) . '/dbconn';
    
    // Create constant to represent db connection
    define('MYSQL', $root . '/2018_pdo_connect.php');
    // c:/xampp/dbconn/2018_pdo_connect.php