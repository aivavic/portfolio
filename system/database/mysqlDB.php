<?php
namespace portfolio\system\database;



use portfolio\system\App;

use portfolio\system\errors\DBException;


class mysqlDB extends MainDB {
    public function __construct()
    {
        $setting = App::Setting();
        $hostname = $setting['db']['host'];
        $user = $setting['db']['user'];
        $password = $setting['db']['password'];
        $database = $setting['db']['database'];
        try {
            $connect = mysql_connect($hostname, $user, $password);
            if(!$connect)
                throw new DBException("Невозможно соединиться с базой данных", 42);
        }
        catch (DBException $e) {
            echo "Исключение ".$e->getCode().": ".$e->getMessage()."<br />".
                " в ".$e->getFile().", строка ".$e->getLine()."<br />";
        }

        try {
            if(!mysql_select_db($database))
                throw new DBException("База данных недоступна", 43);
        }
        catch (DBException $e) {
            echo "Исключение ".$e->getCode().": ".$e->getMessage()."<br />".
                " в ".$e->getFile().", строка ".$e->getLine()."<br />";
        }
    }


}