<?php
require __DIR__."/../vendor/autoload.php";

use Source\Models\User;


$user = new User();
$user->first_name = "Marisa";
$user->last_name = "Ribeiro";
$user->genre = "F";

$user->save();



var_dump($user);
