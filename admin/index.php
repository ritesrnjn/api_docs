<?php
if(session_status() == PHP_SESSION_NONE) session_start();

if(!isset($_SESSION['admin_id'])) header("Location: ../");

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'admin' . DIRECTORY_SEPARATOR);
require ROOT . 'config/config.php';
require ROOT . 'vendor/autoload.php';
// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';
// start the application
$app = new Application();