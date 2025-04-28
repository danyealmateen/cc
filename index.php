<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>code cabin</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php 

require_once 'Kid.php';

    echo '<form method="post">';
    echo '<input type="text" name="create_kid_name" placeholder="Fullständigt namn"/><br>';
    echo '<input type="text" name="create_kid_current_belt" placeholder="Nuvarande bälte"/><br>';
    echo '<input type="text" name="create_kid_next_belt" placeholder="Kommande bälte"/><br><br>';
    echo '<button type="submit">Skapa</button>';
    echo '</form>';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $create_kid_name = $_POST['create_kid_name'];
        $create_kid_current_belt = $_POST['create_kid_current_belt'];
        $create_kid_next_belt = $_POST['create_kid_next_belt'];

        if(!empty($create_kid_name) && !empty($create_kid_current_belt) && !empty($create_kid_next_belt)) {
            $kidCreate = Kid::createKid($create_kid_name, $create_kid_current_belt, $create_kid_next_belt);
        }

        if($kidCreate) {
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            echo 'Could not create new kid.' . PHP_EOL;
        }
    } 


    echo '<table border="3">';
    echo '
        <tr>
            <th>Namn:</th>
            <th>Nuvarande bälte:</th>
            <th>Nästa bälte</th>
            <th>Uppdaterad:</th>
        </tr>
    ';
    
    $kidData = Kid::getAll();

    foreach($kidData as $kid) {
        echo '
            <tr>
                <td>'.htmlspecialchars($kid['name']).'</td>
                <td>'.htmlspecialchars($kid['current_belt']).'</td>
                <td>'.htmlspecialchars($kid['next_belt']).'</td>
                <td>'.htmlspecialchars($kid['updated_date']).'</td>
            </tr>
    ';
}
echo '</table>';
?>
</body>
</html>