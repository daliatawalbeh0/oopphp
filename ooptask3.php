<?php
class Car
{
    private $make;
    private $model;
    private $year;
    function setmake($makecar)
    {
        $this->make = $makecar;
    }
    function setmodel($modelcar)
    {
        $this->model = $modelcar;
    }
    function setyear($yearcar)
    {
        $this->year = $yearcar;
    }
    function getmake()
    {
        echo $this->make . "<br/>";
    }
    function getmodel()
    {
        echo $this->model . "<br/>";
    }
    function getyear()
    {
        echo $this->year . "<br/>";
    }
}
$mer = new Car; // making obj from Car class
$mer->setmake('22');
$mer->setmodel('42');

$mer->setyear('11');
$mer->getmake();
$mer->getmodel();

$mer->getyear();
