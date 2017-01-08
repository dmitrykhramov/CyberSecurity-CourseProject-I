<?php

//FRONT CONTROLLER

//1. Basic settings
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

//2. Connection system files
define('ROOT', dirname(__FILE__));
require_once (ROOT . '/components/AutoLoad.php');

//3. Call Router

$router = new Router();
$router->run();


