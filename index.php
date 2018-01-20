<?php

error_reporting();
require_once "config.php";
use Illuminate\Database\Eloquent\Model;
class User extends Model {

/*
Eloquent relacionará por defecto el modelo con una tabla que tenga su nombre en plural
en vez de singular, o agregando una S si no trabajamos en inglés, en este caso 'productos',
si queremos especificar una tabla manualmente, podemos hacerlo de este modo:
protected $table = 'articulos';
*/
}

$users = User::all();

// foreach ($users as $user) {
// 	echo "\n" . $user['n'] . "\n";
// }
var_dump( $users );

