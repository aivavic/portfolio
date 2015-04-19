<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/18/15
 * Time: 10:02 PM
 */

namespace portfolio\system;

use portfolio\system\errors as error;

class App
{
    static private $settings = [];

    /**
     * @return mixed
     */
    static public function Setting()
    {
        return self::$settings;
    }

    /**
     * @param mixed $setting
     */
    static final private function setSetting($setting)
    {

        try {
            new error\SettingException($setting);
            self::$settings = require_once $setting;
        } catch (\Exception $e) {
            echo 'Опаньки: ', $e->getMessage(), "\n";
        }

    }

    public static function init($setting, $error)
    {
        self::Register();
        self::setSetting($setting);
    }

    public static function Register() {
        return spl_autoload_register(array(self, 'Load'));
    }

    public static function Load($strObjectName) {

        $classPath = str_replace('\\', DIRECTORY_SEPARATOR , str_replace('portfolio\\', DIRECTORY_SEPARATOR, $strObjectName));
        $strObjectFilePath = BASE . $classPath . '.php';
            require($strObjectFilePath);
    }
}