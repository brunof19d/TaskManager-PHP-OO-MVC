<?php
/**
 * @author           Bruno Dadario <brunof19d@gmail.com>
 * @copyright        (c) 2020, Bruno Dadario. All Rights Reserved.
 * @license          Lesser General Public License <http://www.gnu.org/copyleft/lesser.html>
 */

class Database
{
    private static $dbName = 'taskmanager';
    private static $dbHost = 'localhost';
    private static $dbUser = 'root';
    private static $dbPwd = '';

    private static $connect = null;

    public function __construct()
    {
        die('Function init is denied');
    }

    public static function connectDB()
    {
        if (null == self::$connect) {
            try {
                self::$connect =  new PDO("mysql:host=" . self::$dbHost . ";" . "dbname=" . self::$dbName, self::$dbUser, self::$dbPwd);
                self::$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exception) {
                die($exception->getMessage());
            }
        }
        return self::$connect;
    }

    public static function disconnectDB()
    {
        self::$connect = null;
    }
}
