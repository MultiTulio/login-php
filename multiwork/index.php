<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

session_start();

define('BASEPATH', 'system/core');
define('APPPATH', 'application');
require_once(BASEPATH.'/App.php');

$app = new App();
$app->run();
