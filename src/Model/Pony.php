<?php
namespace App\Model;

use App\Model\Equine;


//One Responsability : State a pony and set its gametype

class Pony extends Equine{

    //Attributes
    private const RACE = "PONY";

    //Properties
    private Capabilitie $capabilitie;


    public function __construct(string $name, string $id, string $color, string $water)
    {
        parent::__construct($name, $id, $color, $water);        
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
        if(isset($this->capabilitie)){
            $str .= "Game type : ".$this->capabilitie->getName()."\n";
        }

        return $str;
    }


}