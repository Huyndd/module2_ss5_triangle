<?php

/**
 * Created by PhpStorm.
 * User: huy
 * Date: 28/01/2019
 * Time: 14:21
 */
class Triangle
{
    public $side1;
    public $side2;
    public $side3;
    public $color;

    public function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function getPerimeter()
    {
        return $this->side1 + $this->side2 + $this->side3;
    }

    public function getArea()
    {
        return pow($this->side1, 2) * (sqrt(3) / 4);
    }

    public function triangleEdge()
    {
        $array[] = $this->side1;
        $array[] = $this->side2;
        $array[] = $this->side3;
        return json_encode($array);
    }

    public function __toString()
    {
        return $this->triangleEdge();
    }
}

$triangle = new Triangle(4, 2, 5);
$triangle->setColor("Blue");
echo $triangle->getColor() . "<br/>";
echo "Triangel have 3 sides is: " . $triangle->triangleEdge() . "<br/>";
echo "Area is: " . $triangle->getArea() . "<br/>";
echo "Perimeter is: " . $triangle->getPerimeter();