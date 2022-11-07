<?php

use App\Model\Pony;
use App\Model\Horse;
use App\Model\Rider;
use App\Model\Equine;
use App\Model\Stable;
use App\Model\Manager;
use App\Model\Sheitland;
use App\Model\Capabilities;

require_once("../src/app.php");

// $manager = new Manager("Lucas", "lucas.barrez@", "Prytanée Militaire", "72200", "La Flèche");
// echo $manager->__toString();

// //Create a stable without manager
// //expected result: the manager is null but the stable is created without error
// $myStable = new Stable("My Stable", "mystable@stable.com", "My Street", "12345", "My City");
// //output stable's informations
// echo $myStable->__toString();

// //Create a stable with a manager
// //expected result: the manager is not null and the stable is created without error
// $myStable1 = new Stable("My Stable1", "mystable@stable.com", "My Street", "12345", "My City", $manager);
// echo $myStable1->__toString();

// // Create a stable with invalid arguments for manager
// // expected result : program stops with an error
// $myStable2 = new Stable("My Stable2", "mystable@stable.com", "My Street", "12345", "My City", "invalid manager");
// echo $myStable1->__toString();

//create capabilities
// $jumping = new Capabilities("jumping");
// $dressage = new Capabilities("dressage");
// $cross = new Capabilities("cross");
// $PoneyGames = new Capabilities("PoneyGames");

// //create a capabilties with invalid argument
// //expected result: program stops with an error
// // $invalidCapabilities = new Capabilities("invalid capabilities");

// //Create a new rider
$rider = new Rider("Lucas", "lucas.barrez@", "Prytanée Militaire", "72200", "La Flèche", new Capabilities("jumping"));
echo $rider->__toString();

$myHorse = new Pony("jumping","Max", "23263232", "Bai", 32, $rider);
$myHorse2 = new Sheitland("jumping","Max", "23263232", "Bai", 32, $rider);
$myHorse3 = new Horse("jumping","Max", "23263232", "Bai", 32, $rider);
$myHorse4 = new Horse("jumping","Max", "23263232", "Bai", 32, $rider);

echo $myHorse->__toString();
echo Equine::getCounter();
echo "\n";
echo $myHorse2->__toString();