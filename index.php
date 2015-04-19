<?php
namespace portfolio\system;

use portfolio\system\database\MainDB;
use portfolio\system\database\mysql\Query;

define('BASE', __DIR__);

$app = BASE . '/system/App.php';
$setting = BASE . '/settings/main.php';
//require_once(BASE . '/system/errors/FileException.php');
$error = BASE . '/system/errors/SettingException.php';

require_once $app;
App::init($setting, $error);

