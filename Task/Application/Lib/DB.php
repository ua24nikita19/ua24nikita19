<?php

namespace Application\Lib;

/** Class to work with database
 */
class DB
{
    public static $dbConnection;

    public function __construct()
    {
        $cridentials = require ROOT.DS.'Application'.DS.'Config'.DS.'db.php';
        self::$dbConnection = mysqli_connect($cridentials['host'], $cridentials['user'],
              $cridentials['pass'], $cridentials['name']);
    }

    //Get connection with database
    public function getConnect()
    {
        return self::$dbConnection;
    }

    //Close connection with database
    public function disconnect()
    {
        mysqli_close(self::$dbConnection);
    }

    //Get data from table by query
    public function query($queryString)
    {
        return mysqli_query(self::$dbConnection, $queryString);
    }

}