<?php

namespace app\Classes;

// Abstract class representing an Apartment
abstract class Apartment
{
    protected $apartmentNumber;
    protected $area;
    protected $numberOfBedrooms;
    protected $rent;

    public function __construct($apartmentNumber, $area, $numberOfBedrooms)
    {
        $this->apartmentNumber  = $apartmentNumber;
        $this->area             = $area;
        $this->numberOfBedrooms = $numberOfBedrooms;
        $this->calculateRent();
    }

    abstract public function calculateRent();

    public function displayApartmentDetails()
    {
        echo "Apartment Number: " . $this->apartmentNumber . "<br>";
        echo "Area (sq. ft.): " . $this->area . "<br>";
        echo "Number of Bedrooms: " . $this->numberOfBedrooms . "<br>";
        echo "Monthly Rent: $" . $this->rent . "<br>";
    }

    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }
}
