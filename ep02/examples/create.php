<?php
require __DIR__."/../vendor/autoload.php";

use Source\Models\User;
use Source\Models\Address;

$user = new User();
$user->first_name = "Aghata";
$user->last_name = "Marquini";
$user->genre = "Feminino";
$user->save();
$addr = new Address();
$addr->user_id = $user->id;
$addr->street = "Rua de Almeida";
$addr->number = "25c";
$addr->save();
var_dump($user);