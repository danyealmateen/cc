<?php 
require_once 'config.php';
class Database {

    /*getConnection()*/
    public static function getConnection() {
        $connection = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        return $connection;
    }
}