<?php
require 'includes/config.php';
require __DIR__ . '/includes/classes/ListItem.class.php';

if (isset($_GET['id'])) {
    $todo = new ListItem();
    $todo->deleteItem((int)$_GET['id']);
}

header("Location: bucketlist.php");
exit;