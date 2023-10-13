<?php

namespace app\Classes;

use app\Classes\Appartment;
use app\Traits\HasBelcony;

class StandardApertment extends Appartment
{
    use HasBelcony;

    public function CalculateRent()
    {
        $this->rent = $this->area * 0.2 + $this->numberOfBedrooms * 100;

        if ($this->hasBelcony()) {
            return $this->rent += 50;
        }
    }
}
