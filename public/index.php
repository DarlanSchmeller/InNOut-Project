<?php

require_once dirname(__FILE__, 2) . '/src/config/config.php'; // The parameter '2' gets the directory's parent parent. The config.php gets the database.php.
//require_once(CONTROLLER_PATH . '/login.php'); // Imports file so the User class can be instanced.
// require_once(CONTROLLER_PATH . '/Login.php'); // Imports file so the User class can be instanced.


$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri == '/' || $uri === '' || $uri == '/index.php') {
    $uri = '/day_records.php';
}

require_once(CONTROLLER_PATH . "/$uri");