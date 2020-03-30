<?php declare(strict_types=1);

use DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\WiFi;

include "vendor/autoload.php";

$doubleRoomBooking = new DoubleRoomBooking();
echo $doubleRoomBooking->calculatePrice(), "\n";
echo $doubleRoomBooking->getDescription(), "\n";

$extraBed = new ExtraBed($doubleRoomBooking);
echo $extraBed->calculatePrice(), "\n";
echo $extraBed->getDescription(), "\n";

$wifi = new WiFi($extraBed);
echo $wifi->calculatePrice(), "\n";
echo $wifi->getDescription(), "\n";
