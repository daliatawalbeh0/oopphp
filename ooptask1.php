<?php
class Car
{
    var $make;
    var $model;
    var $year;
    function setcardata($makecar, $modelcar, $yearcar)
    {
        $this->make = $makecar;
        $this->model = $modelcar;
        $this->year = $yearcar;
    }


    function getcardata()
    {
        echo $this->make . "<br/>";
        echo $this->model . "<br/>";
        echo $this->year . "<br/>";
    }
}
$mer = new Car; // making obj from Car class
$ford = new Car;
$mer->setcardata("2", "2014", "2019");
$mer->getcardata();
$ford->setcardata('9', '2011', '2017');
$ford->getcardata();
