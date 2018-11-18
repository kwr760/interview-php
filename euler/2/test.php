<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:24 PM
 */

include_once 'evenFibonacci.php';

$test = new euler_2\EvenFibonacci();
$test->run(4000000);
echo "\n";
