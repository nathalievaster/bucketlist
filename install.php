<?php
include 'includes/config.php';

$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($db->connect_errno) {
    die("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);
}

$sql = "
DROP TABLE IF EXISTS bucketlist;
CREATE TABLE bucketlist(
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    priority TINYINT NOT NULL, 
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
";

// Skicka SQL-frågan till servern
if($db->multi_query($sql)) {
    echo "Table 'courses' created successfully.";
} else {
    echo "Error creating table: " . $db->error;
}