<?php

require_once dirname(__FILE__, 2) . '/src/config/config.php'; // The parameter '2' gets the directory's parent parent. The config.php gets the database.php.
require_once(dirname(__FILE__, 2) . '/src/models/User.php'); // Imports file so the User class can be instanced.


$user = new User(['name'=> 'Lucas', 'email' => 'lucas@mmtec.com.br']);

// echo $user->getSelect();
// echo User::getSelect(['name' => 'Chaves' , 'email' => 'chaves@cod3r.com.br']);

echo '<br>';
$diabo = User::get(['name' => 'Chaves'], 'id, name, email');
print_r($diabo);
echo '<hr>';
$diabo = User::get([], 'name');
print_r($diabo);