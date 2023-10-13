<?php

namespace app\Classes;


abstract class Appartment
{
    protected $appertmentNumber;
    protected $area;
    protected $numberOfBedrooms;
    protected $rent;

    public function __construct($appertmentNumber, $area, $numberOfBedrooms)
    {
        $this->appertmentNumber = $appertmentNumber;
        $this->area = $area;
        $this->numberOfBedrooms = $numberOfBedrooms;
        $this->CalculateRent();
    }

    abstract public function CalculateRent();

    public function displayAppertmentDetails()
    {
        echo "Appertment Number: " . $this->appertmentNumber . "<br>";
        echo "Area(sq. ft.): " . $this->area . "<br>";
        echo "Number of Berrooms: " . $this->numberOfBedrooms . "<br>";
        echo "Monthly Rent: " . $this->rent . "<br>";
    }

    public function getAppertmentNumber()
    {
        return $this->appertmentNumber;
    }
}
