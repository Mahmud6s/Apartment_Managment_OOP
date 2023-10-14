<?php

namespace app\Classes;

// Class representing a Tenant
class Owner
{
    private $name;        // Property to store the owner's name
    private $apartment;   // Property to store the associated apartment

    public function __construct($name, Apartment $apartment)
    {
        $this->name      = $name;
        $this->apartment = $apartment;
    }


    //display Owner Details
    public function displayOwnerDetails()
    {
        echo "Owner Name: " . $this->name . "<br>";
        echo "Apartment Number: " . $this->apartment->getApartmentNumber() . "<br>";
    }
}
