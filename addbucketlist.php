<?php
    $title = "Lägg till uppgifter";
    include 'includes/header.php';
?>

    <h1>Lägg till uppgifter att göra</h1>

    <?php

    if(isset($_POST['name'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $priority = $_POST['priority'];

        $todo = new ListItem();

        if($course->addItem($name, $description, $priority)) {
            echo "<p class='message'>Uppgiften har lagts till i din lista!</p>";
        } else {
            echo "<p class='error-message'>Det gick inte att lägga till uppgiften. Kontrollera att alla fält är ifyllda.</p>";
        }
    }
    ?>

    <form method="post" action="addbucketlist.php">
        <label for="name">Mål:</label><br>
        <input type="text" id="name" name="name"><br>

        <label for="description">Beskrivning:</label><br>
        <textarea id="description" name="description"></textarea><br>

        <label for="priority">Prioritet:</label><br>
        <select id="priority" name="priority">
            <option value="1">Låg</option>
            <option value="2">Mellan</option>
            <option value="3">Hög</option>
        </select><br>

        <input type="submit" value="Lägg till uppgift">
    </form>

<?php
    include 'includes/footer.php';
?>
