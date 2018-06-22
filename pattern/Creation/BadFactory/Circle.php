<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 10:49 PM
 */

namespace Creation\BadFactory;

class Circle implements iShape {
    /** @var Point */
    var $start;
    /** @var int */
    var $radius;

    /**
     * @param Point $s
     * @param int $5
     */
    public function __construct($s, $r) {
        $this->start = $s;
        $this->radius = $r;
    }

    public function draw() {
        echo 'Drawing circle.';
    }
}
