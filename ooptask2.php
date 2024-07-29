<?php
class Vehicle
{
    var $type;
    function move()
    {
        echo "Hello Dalia" . "<br>";
    }
}
class Car extends Vehicle
{
    function move()
    {
        echo "CAR" . "<br>";
    }
}
class Bike extends Vehicle
{
    function move()
    {
        echo "BIKE" . "<br>";
    }
}
$veh = new Vehicle;
$car = new Car;
$bike = new Bike;
$veh->move();
$car->move();
$bike->move();
