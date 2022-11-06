<?php

use App\Model\Stable;
use App\Model\Manager;

require_once("../src/app.php");

$manager = new Manager("Lucas", "lucas.barrez@", "Prytanée Militaire", "72200", "La Flèche");
echo $manager->__toString();



// //Create a stable without manager
// //expected result: the manager is null but the stable is created without error
// $myStable = new Stable("My Stable", "mystable@stable.com", "My Street", "12345", "My City");
// //output stable's informations
// echo $myStable->__toString();

//Create a stable with a manager
//expected result: the manager is not null and the stable is created without error
$myStable1 = new Stable("My Stable1", "mystable@stable.com", "My Street", "12345", "My City", $manager);
echo $myStable1->__toString();

// // Create a stable with invalid arguments for manager
// // expected result : program stops with an error
// $myStable2 = new Stable("My Stable2", "mystable@stable.com", "My Street", "12345", "My City", "invalid manager");
// echo $myStable1->__toString();

