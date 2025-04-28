<?php 

class Database {
    private static $db_hostname = '127.0.0.1';
    private static $db_username = 'nakedsnake';
    private static $db_password = 'nakedsnake';
    private static $db_database = 'cc';

    /*getConnection()*/
    public static function getConnection() {
        $connection = new mysqli(
            self::$db_hostname, 
            self::$db_username, 
            self::$db_password, 
            self::$db_database
    );
        return $connection;
    }
}