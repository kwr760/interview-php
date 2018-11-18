<?php
/**
 * Created by PhpStorm.
 * User: royk
 * Date: 3/28/2015
 * Time: 11:35 PM
 */

namespace Creation\BadFactory;

class Painting
{
    /** @var Point */
    private $x;
    /** @var Point */
    private $y;
    /** @var int */
    private $width;
    /** @var int */
    private $height;
    /** @var int */
    private $radius;

    /**
     * @param Point $a
     * @param Point $b
     * @param int $w
     * @param int $h
     * @param int $r
     */
    public function __construct(Point $a, Point $b, $w, $h, $r)
    {
        $this->x = $a;
        $this->y = $b;
        $this->width = $w;
        $this->height = $h;
        $this->radius = $r;
    }

    /**
     * @return Line
     */
    public function drawLine()
    {
        return new Line($this->x, $this->y);
    }

    /**
     * @return Square
     */
    public function drawSquare()
    {
        return new Square($this->x, $this->width, $this->height);
    }

    /**
     * @return Circle
     */
    public function drawCircle()
    {
        return new Circle($this->x, $this->radius);
    }
}
