<?php
date_default_timezone_get('America/Sao Paulo'); // Defines timezone to get the current Sao Paulo time
setlocale(LC_TIME, 'pt_BR', 'pt-BR.uft-8', 'portuguese'); // Defines the formatting standard to pt-BR

// ----------------- FOLDERS ----------------------

define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models')); // Define uma constante que contem o caminho da pasta Models.
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views')); // Define uma constante que contem o caminho da pasta Views.
define('CONTROLLER_PATH', realpath(dirname(__FILE__)) . '/../controllers');

// ----------------- Files to Auto-Load -----------------------

require_once(realpath(dirname(__FILE__) . '/database.php')); // Adds the database.php file.
require_once(realpath(dirname(__FILE__) . '/loader.php')); // Adds the loader.php file.
require_once(realpath(MODEL_PATH . '/Model.php'));