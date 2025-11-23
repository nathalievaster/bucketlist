<?php include ("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <a href="index.php" class="logo">Bucketlist</a>

    <button class="menu-toggle" aria-label="Öppna meny" aria-expanded="false">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <?php include 'includes/mainmenu.php'; ?>
</header>

<div class="menu-backdrop"></div>
    <main>
