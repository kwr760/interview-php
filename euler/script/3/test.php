<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:24 PM
 */

include_once '..\..\class\3\largestFactor.php';

$test = new euler_3\largestFactor();
// 600851475143
echo $test->run(600851475143);
echo "\n";
