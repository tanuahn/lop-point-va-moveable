<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 09/04/19
 * Time: 11:21
 */

class Point
{
    public $x;
    public $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->x = $x;
    }

    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->y = $y;
    }

    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        return "[" . $this->x . "," . $this->y . "]";
    }

    public function toString()
    {
        return "Toa do cua diem la: (" . $this->x . "," . $this->y . ")";
    }
}