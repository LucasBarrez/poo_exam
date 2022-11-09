<?php
namespace App\Model;

//One Responsability : State a sheitland and set its gametype

class Sheitland extends Equine{
    //properties
    private Capabilitie $capabilitie;

    private const RACE = "SHEITLAND";

    public function __construct(string $name, string $color, string $water)
    {
        parent::__construct($name, $color, $water);
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