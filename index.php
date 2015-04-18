<?php
namespace portfolio\app;

define('BASE', __DIR__);

$app = BASE . '/system/App.php';
$setting = BASE . '/settings/main.php';
$error = BASE . '/system/Errors/IncludeException.php';

require_once $app;
App::init($setting, $error);