<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:26 PM
 */

namespace euler_2;

/**
 * Class evenFibonacci
 * @package euler_2
 */
class EvenFibonacci
{
    /**
     * @param int $range
     */
    public function run($range)
    {
        $total = 0;
        $fib[0] = 0;
        $fib[1] = 1;
        for ($i = 1; $fib[1] <= $range; $i++) {
            $next = $fib[0] + $fib[1];
            $fib[0] = $fib[1];
            $fib[1] = $next;
            if (0 == $fib[1] % 2) {
                $total += $fib[1];
            }
            echo $next . " - " . $total . "\n";
        }
    }
}