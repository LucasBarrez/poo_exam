<?php
namespace App\Model;

//One Responsability : State a sheitland and set its gametype

class Sheitland extends Equine{
    //properties
    private ?Capabilitie $capabilitie = null;

    private const RACE = "Sheitland";

    public function __construct(string $name, string $id, string $color, string $water, $rider = null, $capabilitie = null)
    {
        parent::__construct($name, $id, $color, $water, $rider);
        $this->setCapabilitie($capabilitie);

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
        return "\nRace :".self::RACE."\n".parent::__toString();
    }
}