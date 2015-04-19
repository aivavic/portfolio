<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/18/15
 * Time: 11:52 PM
 */

namespace portfolio\system\database;

use portfolio\system\App as app;

class MainDB
{

    public function __construct()
    {
        $setting = app::Setting();
        $class = $setting['db']['type'];

        switch ($class) {
            case 'mysql':
                $object = new mysqlDB();
                break;
            default:
                $object = new mysqlDB();
                break;
        }

        return $object;
    }




}