<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 10:49 PM
 */

namespace Creation\BadFactory;

class Circle implements iShape
{
    /** @var Point */
    private $start;
    /** @var int */
    private $radius;

    /**
     * @param Point $s
     * @param int $r
     */
    public function __construct($s, $r)
    {
        $this->start = $s;
        $this->radius = $r;
    }

    public function draw()
    {
        echo 'Drawing circle.';
    }
}
