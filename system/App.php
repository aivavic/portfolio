<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/18/15
 * Time: 10:02 PM
 */

namespace portfolio\app;

use portfolio\error\IncludeException as error;
class App {

    public static function init($setting, $error){
        require_once $error;
        try {
            $setting = new error\IncludeException($setting);

        } catch (\Exception $e) {
            echo 'Опаньки: ',  $e->getMessage(), "\n";
        }
        echo '<pre>';
        var_dump($setting);

    }
}