<?php
// Ta fram vilken sida vi är på just nu
$current = basename($_SERVER['PHP_SELF']);

$menuItems = [
    'index.php'        => 'Startsida',
    'bucketlist.php'   => 'Bucketlist',
    'addbucketlist.php'=> 'Lägg till',
    'ai.php'           => 'AI',
];
?>

<nav class="main-nav">
    <ul>
        <?php foreach ($menuItems as $file => $text): ?>
            <li class="<?= $current === $file ? 'active' : '' ?>">
                <a href="<?= $file ?>"><?= htmlspecialchars($text) ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</nav>
