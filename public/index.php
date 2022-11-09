<?php

#AUTHOR : BARREZ Lucas
#DATE : 2022-10-11

use App\Model\Pony;
use App\Model\Horse;
use App\Model\Rider;
use App\Model\Equine;
use App\Model\Stable;
use App\Model\Manager;
use App\Model\Sheitland;
use App\Model\Capabilitie;
use App\Model\DressageEvent;
use App\Model\Human;
use App\Model\JumpingEvent;
use App\Model\RiderTeam;

require_once("../src/app.php");

//I have many problems with exceptions, I don't know how to use them correctly because
// it never works when I try to use them. It's as if the exceptions were not taken and just pass, when
//I tried to use them to check the type of input arguments, nothing happened, the program just passed
// and set incorrect values to the properties.

//This testing phase will illustrate the problem.

//-------------------------------------------------------
//Testing phase
//-------------------------------------------------------

//Create a stable without manager
echo "------Create a stable without manager\n\n------";
$stable = new Stable("HorseFarm","horseFarm@farming.com","Rue Générale Vanier",14000, "Caen");

//Output the stable's informations (no error)
echo $stable->__toString();

//Create a manager
echo "\n------Create a manager------\n\n";
$manager = new Manager("John","horseFarmManager@farming.com","Rue Générale Vanier",14000, "Caen");

//Output the manager's informations (no error)
echo $manager->__toString();

//Assign the manager to the stable
echo "\n------Assign the manager to the stable------\n\n";
$stable->setManager($manager);

//Output the new stable's informations (no error)
echo $stable->__toString();

//Create a stable with invalid values
echo "\n------Create a stable with invalid values------\n\n";
try{
    $stable2 = new Stable("HorseFarm",1,1,1,1);
}catch(Exception $e){
    echo $e->getMessage();
}

//output the stable's informations (error)
//expected output : Invalid arguments for Stable : missing arguments
echo $stable2->__toString();


//-------------------------------------------------------
//True Story
//-------------------------------------------------------

//Create a stable without manager
echo "------Create a stable without manager\n\n------";
$manager = new Manager("John","horseFarmManager@farming.com","Rue Générale Vanier",14000, "Caen");

//Create a manager
echo "\n------Create a manager------\n\n";
$manager = new Manager("John","horseFarmManager@farming.com","Rue Générale Vanier",14000, "Caen");

//Assign the manager to the stable
echo "\n------Assign the manager to the stable------\n\n";
$stable->setManager($manager);

//Output the stable's informations
echo $stable->__toString();

//Create all categories of game type
echo "\n------Create all categories of game type------\n\n";
$jumping = new Capabilitie("Jumping");
$dressage = new Capabilitie("Dressage");
$cross = new Capabilitie("Cross");
$ponygames = new Capabilitie("Pony Games");

//Create a Rider : rider1
echo "\n------Create a Rider : rider1------\n\n";
$rider1 = new Rider("Lucas", "lucas@lucas.com", "somewhere", 0000, "somewhere");
//Add Game type to rider1
$rider1->setCapabilitie($jumping);
//Output rider1's informations
echo $rider1->__toString();

//Create a Rider : rider2
echo "\n------Create a Rider : rider2------\n\n";
$rider2 = new Rider("Alex", "alex@lucas.com", "everywhere", 0000, "everywhere");
//add Game type to rider2
$rider2->setCapabilitie($dressage);
//Output rider2's informations
echo $rider2->__toString();

//Create a Rider : rider1
echo "\n------Create a Rider : rider3------\n\n";
$rider3 = new Rider("Max", "max@lucas.com", "nowhere", 0000, "nowhere");
//Add Game type to rider1
$rider3->setCapabilitie($cross);
//Output rider1's informations
echo $rider3->__toString();

//Create equines
echo "\n------Create equines------\n\n";


echo "\n------Equine : Pony------\n\n";
$pony = new Pony("Milka","white",4);
$pony->setCapabilitie($ponygames);
echo $pony->__toString();
echo "\n------Equine : Horse------\n\n";
$horse = new Horse("Lucky","alzan",4);
$horse->setCapabilitie($jumping);
echo $horse->__toString();
echo "\n------Equine : Sheitland------\n\n";
$sheitland = new Sheitland("Marc","Bai",4);
$sheitland->setCapabilitie($dressage);
echo $sheitland->__toString();

//Create a riderTeam
echo "\n------Create a riderTeam------\n\n";
$riderTeam = new RiderTeam($rider1);
//add equines to riderTeam
$riderTeam->addAnimal($pony);
$riderTeam->addAnimal($horse);
$riderTeam->addAnimal($sheitland);
try {
    $riderTeam->addAnimal($sheitland);
} catch (Exception $e) {
    echo $e->getMessage();
}
//Output riderTeam's informations
//Problem with counter and add method
echo $riderTeam->__toString();
//var_dump($riderTeam->getTeam());

//Create a Events
echo "\n------Create a Events------\n\n";

//Create Dressage Event
echo "\n------Create Dressage Event------\n\n";
$dressageEvent = new DressageEvent("Dressage", "12 novembre", "Caen", 5, 10);

//Add Equines to Dressage Event
//Here the exception is taken but a problem subsists ( water error is never thrown)
try{
    echo "\n------Add Equines to Dressage Event------\n\n";
    $dressageEvent->addParticipant($pony);
    $dressageEvent->addParticipant($horse);
    $dressageEvent->addParticipant($sheitland);
    $dressageEvent->addParticipant($sheitland);
    echo $dressageEvent->__toString();
}catch(Exception $e){
    echo $e->getMessage();
}


//ouput Dressage Event
echo $dressageEvent->__toString();

//Remove an equine from event
echo "\n------Remove an equine from event------\n\n";
$dressageEvent->removeParticipant($pony);

//Try to remove participant that is not in the event
echo "\n------Remove an equine that is not registered in the event------\n\n";
try {
    $dressageEvent->removeParticipant($sheitland);
} catch (Exception $e) {
    echo $e->getMessage();
}

//ouput Dressage Event
echo $dressageEvent->__toString();

//It's the same with other events

//Create Jumping Event
echo "\n------Create Jumping Event------\n\n";
$jumpingEvent = new JumpingEvent("Jumping", "12 novembre", "Caen", 5, 10);

//Add Equines to Dressage Event
//Here the exception is taken but a problem subsists ( water error is never thrown)
try{
    echo "\n------Add Equines to Jumping Event------\n\n";
    $jumpingEvent->addParticipant($pony);
    $jumpingEvent->addParticipant($horse);
    $jumpingEvent->addParticipant($sheitland);
    $jumpingEvent->addParticipant($sheitland);
    echo $jumpingEvent->__toString();
}catch(Exception $e){
    echo $e->getMessage();
}


//ouput Jumping Event
echo $jumpingEvent->__toString();

//Remove an equine from event
echo "\n------Remove an equine from event------\n\n";
$jumpingEvent->removeParticipant($pony);

//Try to remove participant that is not in the event
echo "\n------Remove an equine that is not registered in the event------\n\n";
try {
    $jumpingEvent->removeParticipant($sheitland);
} catch (Exception $e) {
    echo $e->getMessage();
}

//ouput Dressage Event
echo $jumpingEvent->__toString();

/**
 * TO DO FOR THE NEXT VERSION
 * 
 * Refactoring the code (for example : too many responsability in event class)
 * DON'T FORGET TEST such as : we can subscribe to an event only if we have the right game type
 * Learn to use the exception, try, catch
 * 
 * Improve architecture of the repository
 * 
 * What I need : ===>>> More practice in php, OOP ... / Take step back
 * 
 * Positives points :
 * => Improving my OOP skills
 * => try to think solid even if I know that my code could be better ( but I have an idea to improve it : which class are too heavy etc...)
 * => Improving my PHP skills
 */

