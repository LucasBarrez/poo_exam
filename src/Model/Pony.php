<?php
namespace App\Model;

use App\Model\Equine;


//One Responsability : State a pony and set its gametype

class Pony extends Equine{

    //Attributes
    private const RACE = "Pony";

    //Properties
    private ?Capabilitie $capabilitie = null;


    public function __construct(string $name, string $id, string $color, string $water, $rider = null, $capabilitie = null)
    {
        parent::__construct($name, $id, $color, $water, $rider);
        if($capabilitie instanceof Capabilitie and $capabilitie !== null){
            $this->setCapabilitie($capabilitie);
        }
        if ($capabilitie !== null and !($capabilitie instanceof Capabilitie)){
            die("The capabilitie must be an instance of Capabilies class\n");
        }
        
    }

    /**
     * Get the value of capabilitie
     */ 
    public function getCapabilitie()
    {
        return $this->capabilitie;
    }

    /**
     * Set the value of capabilitie
     *
     * @return  self
     */
    public function setCapabilitie($capabilitie)
    {
        $this->capabilitie = $capabilitie;

        return $this;
    }

    public function __toString(): string
    {
        return "\nRace :".self::RACE."\n".parent::__toString()."Game Type : ".$this->gameType."\n";
    }


}