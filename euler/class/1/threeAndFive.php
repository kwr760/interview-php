<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 12/31/2014
 * Time: 10:26 PM
 */

namespace euler_1;

/**
 * Class threeAndFive
 * @package euler_1
 */
class threeAndFive {
    /**
     * @param int $range
     */
    public function run ($range)
    {
        $total = 0;
        for ($i = 3; $i <= $range; $i = $i + 3) {
            $total += $i;
        }
        for ($i = 5; $i <= $range; $i = $i + 5) {
            if (0 != $i % 3) {
                $total += $i;
            }
        }
        echo "The total is " . $total;
    }
}