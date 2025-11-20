<?php
    $title = "Startsida";
    include 'includes/header.php';
?>

    <h1>Här ser du din att-göra-lista</h1>
    <table>
        <thead>
            <tr>
                <th>Mål</th>
                <th>Beskrivning</th>
                <th>Prioritet</th>
                <th>Skapad</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $todo = new ListItem();
            $todos = $todo->getList();

            foreach ($todos as $t) {
            ?>

            <tr>
                <td><?= $t['name']; ?></td>
                <td><?= $t['description']; ?></td>
                <td>
                    <?php 
                    switch ($t['priority']) {
                        case 1:
                            echo "Låg";
                            break;
                        case 2:
                            echo "Mellan";
                            break;
                        case 3:
                            echo "Hög";
                            break;
                        default:
                            echo "Okänd";
                    }
                    ?>
                </td>
                <td><?= date("Y-m-d H:i:s", strtotime($t['created_at'])); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php
    include 'includes/footer.php';
?>
