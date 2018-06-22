<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:26 PM
 */

namespace euler_3;

/**
 * Class largestFactor
 * @package euler_3
 */
class largestFactor {
    private $Primes = array(2);

    /**
     * @param $number
     * @return int
     */
    public function run($number)
    {
        $sqroot = ceil(sqrt($number));
        $largest = 1;
        for ($i = 3; $i < $sqroot; $i = $i + 2) {
            if ($this->isPrime($i)) {
                if (0 == $number % $i) {
                    echo $i . "\n";
                    $largest = $i;
                }
            }
        }

        echo $largest;
    }

    private function isPrime($number)
    {
        if ($this->isDivisibleByPrime($number)) {
            return false;
        } else {
            $this->Primes[] = $number;
            return true;
        }
    }

    private function isDivisibleByPrime($number)
    {
        foreach ($this->Primes as $prime) {
            if (0 == $number % $prime) {
                return true;
            }
        }
        return false;
    }
}