<?php
include 'autoloader.php';

use app\Classes\LuxuryApartment;
use app\Classes\Owner;
use app\Classes\StandardApartment;

// Instantiate apartment objects
$standardApartment = new StandardApartment("501", 1800, 2);
$luxuryApartment   = new LuxuryApartment("502", 3000, 3, ["Swimming Pool", "Gym", "Parking"]);

// Set balcony for a standard apartment
$standardApartment->setBalcony(true);

$standardApartment->calculateRent();

// Instantiate owner objects
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
