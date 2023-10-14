<?php

namespace app\Classes;

use app\Classes\Apartment;
use app\Traits\HasBalcony;

// Class representing a Standard Apartment
class StandardApartment extends Apartment
{
    use HasBalcony;  // Use the HasBalcony trait for handling balcony-related properties and methods

    public function calculateRent()
    {
        $this->rent = $this->area * 0.2 + $this->numberOfBedrooms * 100;  // Calculate rent based on area and number of bedrooms

        if ($this->hasBalcony()) {
            $this->rent += 50;          // If the apartment has a balcony, add $50 to the rent
        }
    }
}
