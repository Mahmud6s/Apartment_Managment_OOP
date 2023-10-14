<?php

namespace app\Interfaces;

// Interface for apartments with amenities
interface HasAmenities
{
    public function getAmenities();
}






//This HasAmenities interface defines a single method:

// getAmenities(): This method is declared within the interface and is expected to be implemented by any class that chooses to implement this     interface. Classes implementing this interface will provide their list of amenities by defining the behavior of this method.
// This interface serves as a contract, ensuring that any class implementing it must provide a method to retrieve a list of amenities. It allows for a consistent way to access amenity information across different classes that implement the interface