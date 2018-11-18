<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 10:51 PM
 */

namespace Creation\BadFactory;

/**
 * Class Point
 * @package Creation\BadFactory
 */
class Point
{
    /** @var int */
    private $x;
    /** @var int */
    private $y;

    /**
     * @param int $x
     * @param int $y
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}