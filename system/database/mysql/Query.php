<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/19/15
 * Time: 2:06 PM
 */

namespace portfolio\system\database\mysql;


use portfolio\system\database\mysqlDB;

class Query extends mysqlDB{
    public function __construct()
    {
        parent::__construct();
    }

    public function Select($object, $table){
        $query = "SELECT $object FROM `$table`";
        $result = mysql_query($query);
        $rows = mysql_fetch_object($result);
        var_dump($rows);
        echo $rows->id;

    }
}