<?php

use app\Classes\Owner;
use app\Classes\LuxaryApertment;
use app\Classes\StandardApertment;

include "autoloader.php";


$standerdApartment = new StandardApertment("501", 1800, 2);
$luxaryApartment = new LuxaryApertment("501", 3000, 3, ["Swimming", "Gym", "Parking"]);




$standerdApartment->hasBelcony( true );
$standerdApartment->CalculateRent();



$owner1 = new Owner("Robin",$standerdApartment);
$owner2 = new Owner("Sahrukh",$standerdApartment);


echo "Standar Apartment Details"."<br>";
$standerdApartment->displayAppertmentDetails();


echo "<br>"."luxary Apartment Details"."<br>";



