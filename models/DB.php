<?php 
    require './config/db.php';

class DB {
    protected static $db;
    public static function connexion() {

        try {
            self::$db = new mysqli(DBConfig::$host, DBConfig::$user, DBConfig::$password, DBConfig::$dbname);
    
        } catch( Exception $e) {
            echo($e);
            die();
        }

        return self::$db;
    }
}


?>