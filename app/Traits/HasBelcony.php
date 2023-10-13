<?php

namespace app\Traits;


trait HasBelcony{
    protected $belcony;

    public function setBelcony($belcony){
        $this->belcony = $belcony;
    }

    public function hasBelcony(){
        return $this->belcony;
    }
}