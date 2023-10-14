<?php

namespace app\Traits;

// Trait for apartments with balconies
trait HasBalcony
{
    protected $balcony; // Property to store the balcony

    // Method to set the of the balcony
    public function setBalcony($hasBalcony)
    {
        $this->balcony = $hasBalcony;
    }

    // Method to check if the apartment has a balcony
    public function hasBalcony()
    {
        return !empty($this->balcony);
    }
}
