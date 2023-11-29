<?php 
    namespace Fajri\Config{
    require_once __DIR__ . "/../../config/DatabaseConfig.php";
    use PDO;

        class Database{
            private static PDO $db;
            public static function getConnection(){
                if(!isset(self::$db)){
                    $url = database()["url"];
                    $hostname = database()["hostname"];
                    $password = database()["password"];

                    self::$db = new PDO($url, $hostname, $password);
                }
                return self::$db;
            }
        }
    }
?>