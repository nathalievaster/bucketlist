<?php
require 'includes/header.php';
require 'includes/classes/listItem.class.php';

if (isset($_GET['id'])) {
    $todo = new ListItem();
    $todo->deleteItem($_GET['id']);
}

// Skicka tillbaka användaren efter radering
header("Location: bucketlist.php");
exit;
