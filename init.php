<?php 

    // Start the output buffering
    // Outputs the data stored into a variable and sends to the browser
    ob_start();

    define('WWW_ROOT', 'https://www.gregoryosborne.ca');
    define('PROJECT_ROOT', dirname(__FILE__));

    // Adding the database constants
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'portfolio');

    // Include functions
    require('functions.php');

    // Include the Class 
    require( get_path('/Classes/Artifact.php') );
    require( get_path('/Classes/artifacts.php') );


    // Connect to the database
    // $db = db_connect();

    // Start a session

    // Test

    // Passes database stored in $db to the respective class
    // Artifact::set_db($db);

    