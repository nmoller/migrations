<?php
/**
 * Created by PhpStorm.
 * User: nmoller
 * Date: 20/03/17
 * Time: 8:20 AM
 */

include __DIR__. '/vendor/autoload.php';
include __DIR__ . '/bootstrap.php';

use Uqam\Models\Test;

$test = new Test();
$test->serial_number = 101;
$test->name = "Testing";
$test->save();