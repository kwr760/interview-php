<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 10:49 PM
 */

namespace Creation\BadFactory;

class Line implements iShape {
    /** @var Point */
    var $a;
    /** @var Point */
    var $b;

    /**
     * @param Point $a
     * @param Point $b
     */
    public function __construct($a, $b) {
        $this->a = $a;
        $this->b = $b;
    }

    public function draw() {
        echo 'Drawing line.';
    }
}
