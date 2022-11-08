<?php
namespace App\Model;

use App\Model\Equine;


//One Responsability : State a pony and set its gametype

class Pony extends Equine{

    //Attributes
    private const RACE = "PONY";

    //Properties
    private ?Capabilitie $capabilitie = null;


    public function __construct($capabilitie = null, string $name, string $id, string $color, string $water, $rider = null)
    {
        parent::__construct($name, $id, $color, $water, $rider);
        if($capabilitie instanceof Capabilitie and $capabilitie !== null){
            $this->setCapabilitie($capabilitie);
        }
        if ($capabilitie !== null and !($capabilitie instanceof Capabilitie)){
            echo "The capabilitie must be an instance of Capabilies class\n";
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
        $str = "\nRace :".self::RACE."\n".parent::__toString();
        if($this->capabilitie !== null){
            $str .= "Game type : ".$this->capabilitie->getName()."\n";
        }

        return $str;
    }


}