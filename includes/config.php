<?php

$devMode = false;

if ($devMode) {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

// Inkludera klasser automatiskt
spl_autoload_register(function($class_name) {
    include __DIR__ . "/classes/" . $class_name . ".class.php";
});

require __DIR__ . "/config.server.php";