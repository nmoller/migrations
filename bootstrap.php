<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 17/03/17
 * Time: 10:27 AM
 */


use Illuminate\Database\Capsule\Manager;

$database_path = __DIR__.'/database/database.sqlite3';
$mng = new Manager();
$mng->addConnection([
    'driver' => 'sqlite',
    'database' => $database_path,
    'prefix' => '',
], 'default');

$mng->bootEloquent();
// Pour avoir accès à la méthode
$mng->setAsGlobal();