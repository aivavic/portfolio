<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/19/15
 * Time: 12:37 PM
 */

namespace portfolio\system\errors;


class FileException extends \Exception{

    public function __construct($file){

        if((file_exists($file) === false) || (is_readable($file) === false)) {
            throw new \Exception('File NoT Found.');
        }
         else {
            return true;
        }
    }
}