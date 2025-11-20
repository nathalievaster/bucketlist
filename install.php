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
    code VARCHAR(6) NOT NULL,
    name VARCHAR(100) NOT NULL,
    progression VARCHAR(2) NOT NULL,
    syllabus varchar(255) NOT NULL
);
";


$sql .= "INSERT INTO courses(code, name, progression, syllabus)VALUES('AK001A', 'Teori och metod', 'AV', 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/AK001A');";
$sql .= "INSERT INTO courses(code, name, progression, syllabus)VALUES('DT084G', 'Introduktion till programmering med JavaScript', 'A', 'https://www.miun.se/utbildning/kursplaner-och-utbildningsplaner/DT');";

// Skicka SQL-frågan till servern
if($db->multi_query($sql)) {
    echo "Table 'courses' created successfully.";
} else {
    echo "Error creating table: " . $db->error;
}