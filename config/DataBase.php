<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 8/1/18
 * Time: 1:21 PM
 */

class DataBase
{
    static $connect;

    static function getConnect() {
        require_once ROOT.'/config/init_db.php';
        $dns = "mysql:host={'host'};dbname={'accounts'}";
        try {
            $connect = new PDO($dns, DB_LOG, DB_PASS);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $connect;
    }
}