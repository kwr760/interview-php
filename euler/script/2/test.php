<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:24 PM
 */

include_once '..\..\class\2\evenFibonacci.php';

$test = new euler_2\evenFibonacci();
$test->run(4000000);
echo "\n";
