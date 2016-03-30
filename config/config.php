<?php
/**
 * Login credentials for admin dashboard
 */
define('ADMIN_NAME', 'admin');
define('ADMIN_PASS', 'admin');

/**
 * Show errors while debugging
 */
define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
}

/**
 * Generating url
 */
define('PROJECT_FOLDER','api_docs'); //Relative path of projects folder
define('URL_PUBLIC_FOLDER', 'public');
define('URL_PROTOCOL', 'http://');
define('URL_DOMAIN', $_SERVER['HTTP_HOST']);
define('URL_SUB_FOLDER', str_replace(URL_PUBLIC_FOLDER, '', dirname($_SERVER['SCRIPT_NAME'])));
define('URL', URL_PROTOCOL . URL_DOMAIN . URL_SUB_FOLDER);
define('BASEURL', URL_PROTOCOL . URL_DOMAIN . DIRECTORY_SEPARATOR . PROJECT_FOLDER);
/**
 * Configuration for: Database
 * mysql or sqlite
 */
define('DB_DRIVER', 'sqlite');

//If DB_DRIVER is mysql
/*
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'api_docs');
define('DB_USER', 'root');
define('DB_PASS', '000000');
*/