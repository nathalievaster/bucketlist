<?php

$devMode = true;

if ($devMode) {
// Felmeddelanden
    error_reporting(error_level: -1);
    ini_set("display_errors", value: 1);
}

// Inkludera klasser automatiskt
    spl_autoload_register(function($class_name) {
        include "includes/classes/" . $class_name . ".class.php";
    });

if($devMode) {
    // Databasinställningar för utveckling
    define('DB_HOST', 'localhost');
    define('DB_USER', 'bucketlist');
    define('DB_PASS', 'bucketlist');
    define('DB_NAME', 'bucketlist');
} else {
    // Databasinställningar för produktion
}