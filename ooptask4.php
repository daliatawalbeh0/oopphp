<?php

// Define the abstract class Shape
abstract class Shape
{
    abstract public function calculateArea();
}

// Define the Circle class
class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// Define the Rectangle class
class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }
}

// Instantiate and use the classes
$cir = new Circle(2);
echo $cir->calculateArea() . "<br>";

$rec = new Rectangle(4, 6);
echo $rec->calculateArea();
