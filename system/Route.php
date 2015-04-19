<?php
/**
 * Created by PhpStorm.
 * User: viktor_
 * Date: 4/19/15
 * Time: 10:08 PM
 */

namespace portfolio\system;


class Route {

    public function add($controller = 'site', $action = 'index', $args = []){
echo $controller . '/' . $action . '/' . $args . '/';
    }
}