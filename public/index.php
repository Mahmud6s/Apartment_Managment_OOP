<?php
include 'autoloader.php';

use app\Classes\LuxuryApartment;
use app\Classes\Owner;
use app\Classes\StandardApartment;

// Create a StandardApartment instance
$standardApartment = new StandardApartment("501", 1800, 2);
$standardApartment->setBalcony(true);
$standardApartment->calculateRent();

// Create a LuxuryApartment instance
$amenities = ['Swimming pool', 'Gym', 'Spa','pool'];
$luxuryApartment = new LuxuryApartment('B202', 1200, 3, $amenities);


// Create Instantiate owner objects
$owner1 = new Owner("Salman Khan", $standardApartment);
$owner2 = new Owner("Shah Rukh Khan", $luxuryApartment);

// Display apartment details
echo "Standard Apartment Details:" . "<br>";
$standardApartment->displayApartmentDetails();


echo  "<br>" . "Luxury Apartment Details: " . "<br>";
$luxuryApartment->displayApartmentDetails();
echo "Amenities: " . $luxuryApartment->getAmenities() . "<br>";

// Display owner details
echo "<br>" . "Owner Details: " . "<br>";
$owner1->displayOwnerDetails();
echo "<br>";
$owner2->displayOwnerDetails();
