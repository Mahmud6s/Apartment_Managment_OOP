<?php

namespace app\Classes;

use app\Classes\Appartment;
use app\Interfaces\HasAmenities;

class LuxaryApertment extends Appartment implements HasAmenities{
    private $amenities;

    public function __construct( $appertmentNumber, $amenities,$area, $numberOfBedrooms){
        parent::__construct($appertmentNumber,$area,$numberOfBedrooms);
        $this->amenities = $amenities;
    }

    public function CalculateRent()
    {
        $this->rent = $this->area * 0.5 + $this->numberOfBedrooms * 100;
    }
}