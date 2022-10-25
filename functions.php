<?php

function get_public_url($path = "") {
    if ($path[0] != '/') {
        $path = '/' . $path;
    }
    return WWW_ROOT . $path;
}


function get_path($path = "") {
    if ($path != "") {
        if ($path[0] != '/') {
            $path = '/' . $path;
        }
    }
    return PROJECT_ROOT . $path;
}


function redirect($path) {
    header('Location: ' . get_public_url($path));
}


function h($str) {
    return htmlspecialchars($str);
}


function u($string) {
    return urlencode($string);
}



// Prints out human readable data wrapped in <pre> tags, for debugging
function wrap_pre($data) {
    return '<pre>' . print_r($data, true) . '</pre>';
}



// Prints out human readable data, and prevents the script from continuing
function dd($data) {
    echo wrap_pre($data);
    die();
}

// Checks if a value is blank 
function blank($var) {
    if (!isset($var) || "" === trim($var, " ")) {
        return true;
    }
    return false;
}

// Adding Database Connection function
function db_connect() {

    // Sets property value as one set in init.php
    $host = DB_HOST;
    $username = DB_USER;
    $password = DB_PASS;
    $db_name =  DB_NAME;

    // $db set as the newly opened connection to the MySQL server based on the property values
    $db = new mysqli($host, $username, $password, $db_name);

    // If the is a error code in $db 
    if ($db->connect_errno) {
        // Then echo string with error code in $db
        echo "Failed to connect to MySQL: " . $db->connect_error;
        // Terminate the script
        exit();
    }

    // If not return the $db value
    return $db;
}
