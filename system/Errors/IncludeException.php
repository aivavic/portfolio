<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/18/15
 * Time: 11:14 PM
 */

namespace portfolio\error\IncludeException;


class IncludeException extends \Exception{



    public function __construct($file){

            if (!file_exists($file)) {
                throw new \Exception('File NoT Found.');
            } else {
                $setting = require_once $file;
                var_dump($setting);
                return $setting;
            }
    }
}