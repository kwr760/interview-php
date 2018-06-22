<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 10:49 PM
 */

namespace Creation\BadFactory;

class Square implements iShape {
    /** @var Point */
    var $start;
    /** @var int */
    var $width;
    /** @var int */
    var $height;

    /**
     * @param Point $s
     * @param int $w
     * @param int $h
     */
    public function __construct($s, $w, $h) {
        $this->start = $s;
        $this->width = $w;
        $this->height = $h;
    }

    public function draw() {
        echo 'Drawing square.';
    }
}
