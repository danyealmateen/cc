<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>code cabin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php 
require_once 'Kid.php';
?>

<script>
function test() {
    e.preventDefault();
    <?php Kid::createKid('asd', 'asd', 'asd'); ?>
}
</script>


<?php 

require_once 'Kid.php';


$kidData = Kid::getAll();



    echo '<form method="post">';
    echo '<input type="text" id="create_kid_name" placeholder="Fullständigt namn"/><br>';
    echo '<input type="text" id="create_kid_current_belt" placeholder="Nuvarande bälte"/><br>';
    echo '<input type="text" id="create_kid_next_belt" placeholder="Kommande bälte"/><br><br>';
    echo '<button onclick="test()">Skapa</button>';
    echo '</form>';


    echo '<table border="3">';
    echo '
    <tr>
        <th>Namn:</th>
        <th>Nuvarande bälte:</th>
        <th>Uppdaterad:</th>
        <th>Skapad:</th>
    </tr>
    ';

    foreach($kidData as $kid) {
        echo '
    <tr>
        <td>'.htmlspecialchars($kid['name']).'</td>
        <td>'.htmlspecialchars($kid['current_belt']).'</td>
        <td>'.htmlspecialchars($kid['updated_date']).'</td>
        <td>'.htmlspecialchars($kid['created_date']).'</td>
    </tr>
    ';
}
echo '</table>';
?>
</body>
</html>