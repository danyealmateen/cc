<?php 

require_once 'Database.php';

class Kid {

    /*getAll()*/
    public static function getAll() {
        $dbConnection = Database::getConnection();
        $query = "SELECT * FROM kid";
        $result = $dbConnection->query($query);
        $data = $result->fetch_all(MYSQLI_ASSOC);
        $dbConnection->close();
        return $data;
    }

    /*createKid() */
    public static function createKid($name, $currentBelt, $nextBelt) {
        $dbConnection = Database::getConnection();
        $query = $dbConnection->prepare("INSERT INTO kid (name, current_belt, next_belt, updated_date) VALUES (?,?,?, NOW())");
        $query->bind_param("sss", $name, $currentBelt, $nextBelt);
        $success = $query->execute();
        $query->close();
        $dbConnection->close();
        return $success;   
    }
}