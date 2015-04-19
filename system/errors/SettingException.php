<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/18/15
 * Time: 11:14 PM
 */

namespace portfolio\system\errors;

//use portfolio\system\error as file;
class SettingException extends FileException{



    public function __construct($file){
            parent::__construct($file);
    }


}

