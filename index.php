<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 09/04/19
 * Time: 11:47
 */
include_once "MoveablePoint.php";
include_once "Point.php";

$point = new Point("4", "5");
echo $point->getXY() . "</br>";
echo $point->toString() . "</br>";

$moveablepoint = new MoveablePoint("7", "8", "3", "2");
echo $moveablepoint->getXY() . "</br>";
echo $moveablepoint->getSpeed(). "</br>";
echo $moveablepoint->toString() . "</br>";
echo $moveablepoint->move();