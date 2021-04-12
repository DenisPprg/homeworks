<?php

interface FigureInterface
{
    public function __toString();
}


abstract class Figure implements FigureInterface
{
    abstract public function getSquare();

    abstract public function getPerimeter();

    public function getDiff()
    {
        return $this->getSquare() / $this->getPerimeter();
    }
    public function __toString()
    {
        return 'Площадь фигуры:'. $this->getSquare(). ', периметр фигуры:'. $this->getPerimeter(). ', отношение:'. $this->getDiff();
    }
}


class Quadrate extends Figure
{
    private $width;

    public function __construct($width)
    {
        $this->width = $width;
    }

    public function getSquare()
    {
        return $this->width * $this->width;
    }

    public function getPerimeter()
    {
        return $this->width * 4;
    }
}

$quadrate = new Quadrate(5);
/*echo $quadrate->getPerimeter(). "\n";
echo $quadrate->getSquare(). "\n";*/
echo $quadrate. "\n";


class Rectangle extends Figure
{
    private $width;
    private $length;

    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function getSquare()
    {
        return $this->width * $this->length;
    }

    public function getPerimeter()
    {
        return ($this->width + $this->length) * 2;
    }
}

$rectangle = new Rectangle(3,4);
/*echo $rectangle->getPerimeter(). "\n";
echo $rectangle->getSquare(). "\n";*/
echo $rectangle, "\n";


class EquilateralTriangle extends Figure
{
    private $side;
    private $height;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getSquare()
    {
        return ($this->side * $this->getHeight()) / 2;
    }

    public function getPerimeter()
    {
        return $this->side * 3;
    }

    public function getHeight(): float
    {
        $height = ($this->side * sqrt(3)) / 2;
        return $height;
    }
}

$triangle = new EquilateralTriangle(5);
/*echo $triangle->getHeight(). "\n";
echo $triangle->getPerimeter(). "\n";
echo $triangle->getSquare(). "\n";
echo $triangle->getDiff();*/
echo $triangle. "\n";

