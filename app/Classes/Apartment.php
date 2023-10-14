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

     // Abstract method to calculate the rent (to be implemented in subclasses)
    abstract public function calculateRent();

     // Method to display apartment details
    public function displayApartmentDetails()
    {
        echo "Apartment Number: " . $this->apartmentNumber . "<br>";
        echo "Area (sq. ft.): " . $this->area . "<br>";
        echo "Number of Bedrooms: " . $this->numberOfBedrooms . "<br>";
        echo "Monthly Rent: $" . $this->rent . "<br>";
    }

     // Method to get the apartment number
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }
}
