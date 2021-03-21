<?php
require __DIR__."/../vendor/autoload.php";

use Source\Models\User;


$user = (new User())->findById(6);
$user->first_name = "Darcy";
$user->last_name = "Ribeiro";
$user->genre = "M";
$user->save();


var_dump($user);
