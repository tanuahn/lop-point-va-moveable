<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 09/04/19
 * Time: 11:36
 */
include_once "Point.php";
class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;

    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    /**
     * @return mixed
     */
    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    /**
     * @param mixed $xSpeed
     */
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    /**
     * @return mixed
     */
    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    /**
     * @param mixed $ySpeed
     */
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return "[" . $this->xSpeed . "," . $this->ySpeed . "]";
    }

    public function toString()
    {
        return "Toc do di chuyen la: (" . $this->xSpeed . "," . $this->ySpeed . ")";
    }

    public function move()
    {
        return "Toa do moi cua diem la: (" . ($this->x + $this->xSpeed) . "," . ($this->y +$this->ySpeed) . ")";
    }
}