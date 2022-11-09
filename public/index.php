<?php

use App\Model\Pony;
use App\Model\Horse;
use App\Model\Rider;
use App\Model\Equine;
use App\Model\Stable;
use App\Model\Manager;
use App\Model\Sheitland;
use App\Model\Capabilitie;
use App\Model\Human;
use App\Model\RiderTeam;
require_once("../src/app.php");

//create capabilities
$jumping = new Capabilitie("Jumping");
$dressage = new Capabilitie("Dressage");
$cross = new Capabilitie("Cross");
$ponyGames = new Capabilitie("Pony Games");

// echo $jumping->__toString();
// echo $dressage->__toString();
// echo $cross->__toString();
// echo $ponyGames->__toString();


// //create manager
// $manager = new Manager("John", "1", "Main Street", 75000, "Paris");
// echo $manager->__toString();

//Create a rider
$rider = new Rider("John", "1", "Main street", 75000, "Paris");
$rider->setCapabilitie($jumping);


$myHorse3 = new Sheitland("Max", "23263232", "Bai", 32);
$myHorse3->setRider($rider);
$myHorse3->setCapabilitie($jumping);
echo $myHorse3->__toString();


// //Create a stable   
// $stable = new Stable("Stable", "1", "Main street", 75000, "Paris");
// echo $stable->__toString();

// try {
//     //code...
//     $myStable1 = new Stable("My Stable1", "mystable@stable.com", "My Street", 12345, "My City");
//     $manager = new Manager("Lucas", "1", "Prytanée Militaire", "72200", "La Flèche");
//     // echo $manager->__toString();
//     $stable = new Stable("name", "La ferme", "5", 12345, "La ferme");
//     // echo $stable->__toString();
//     $stable->setManager($manager);
//     echo $stable->__toString();
// } catch (\Throwable $th) {
//     //throw $th;
//     echo $th->getMessage();

// }


// try {
//     //Create a new stable with good arguments
//     $stable = new Stable("1", "La ferme", "5", 12345, "La ferme");
//     echo $stable->__toString();
// } catch (Exception $e) {
//     echo $e->getMessage();
// }






// // //Create a stable without manager
// // //expected result: the manager is null but the stable is created without error
// // $myStable = new Stable("My Stable", "mystable@stable.com", "My Street", "12345", "My City");
// // //output stable's informations
// // echo $myStable->__toString();

// // //Create a stable with a manager
// // //expected result: the manager is not null and the stable is created without error
// // echo $myStable1->__toString();

// // // Create a stable with invalid arguments for manager
// // // expected result : program stops with an error
// // $myStable2 = new Stable("My Stable2", "mystable@stable.com", "My Street", "12345", "My City", "invalid manager");
// // echo $myStable1->__toString();

// //create capabilities
// $jumping = new Capabilitie("jumping");
// $dressage = new Capabilitie("dressage");
// $cross = new Capabilitie("cross");
// $PoneyGames = new Capabilitie("PoneyGames");

// // //create a capabilties with invalid argument
// // //expected result: program stops with an error
// // // $invalidCapabilities = new Capabilities("invalid capabilities");

// //Create a new rider
// $rider = new Rider("Lucas", "lucas.barrez@", "Prytanée Militaire", 72200, "La Flèche", $jumping);
// //echo $rider->__toString();

// $myHorse = new Pony($jumping, "jbvahk","Max", "Bai", 32, $rider);
// $myHorse2 = new Sheitland($jumping,"Max", "23263232", "Bai", 32, $rider);
// // $myHorse3 = new Horse("jumping","Max", "23263232", "Bai", 32, $rider);
// // $myHorse4 = new Horse("jumping","Max", "23263232", "Bai", 32, $rider);

// // echo $myHorse->__toString();
// // echo Equine::getCounter();
// // echo "\n";
// // echo $myHorse2->__toString();

// $riderCollection = new RiderTeam($rider);
// $riderCollection->addAnimal($myHorse)
//     ->addAnimal($myHorse2);

// echo $riderCollection->__toString();


