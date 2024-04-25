<?php

require_once dirname(__FILE__, 2) . '/src/config/database.php'; // The parameter '2' gets the directory's parent parent.

Database::getConnection(); // Accesses the static function inside of the Database class.