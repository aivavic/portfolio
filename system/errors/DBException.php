<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/19/15
 * Time: 2:13 PM
 */

namespace portfolio\system\errors;


class DBException extends \Exception{

    function __toString() {
        return "<table border=\"\"><tr><td><strong>Исключение ".
        $this->getCode()."</strong>: ".$this->getMessage()."<br />".
        " в ".$this->getFile().", строка ".$this->getLine().
        "</td></tr></table><br />";
    }
}