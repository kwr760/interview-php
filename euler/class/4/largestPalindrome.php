<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:26 PM
 */

namespace euler_4;

/**
 * Class largestPalindrome
 * @package euler_4
 */
class largestPalindrome {
    /**
     * @param $number
     * @return int
     */
    public function run($number)
    {
        $first = $second = $number;

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

    private function isPalindrome($str)
    {
        $len = strlen($str);


    }
}