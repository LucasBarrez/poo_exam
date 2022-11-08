<?php
namespace App\Model;

//One Responsability : State a sheitland and set its gametype

class Sheitland extends Equine{
    //properties
    private ?Capabilitie $capabilitie = null;

    private const RACE = "SHEITLAND";

    public function __construct($capabilitie = null, string $name, string $id, string $color, string $water, $rider = null)
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
        $str = "\nRace :".self::RACE."\n".parent::__toString();
        if($this->capabilitie !== null){
            $str .= "Game type : ".$this->capabilitie->getName()."\n";
        }

        return $str;
    }
}