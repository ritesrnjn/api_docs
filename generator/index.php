<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'generator' . DIRECTORY_SEPARATOR);

require ROOT . 'vendor/autoload.php';
require APP . 'config/config.php';

// load application class
require APP . 'core/application.php';
require APP . 'core/controller.php';

// start the application
$app = new Application();