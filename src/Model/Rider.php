<?php
namespace App\Model;

//This class has the responsability to state a Human as a rider

class Rider extends Human{
    //Properties
    private Capabilities $gameType;

    //Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, Capabilities $gameType){
        parent::__construct($name, $adress, $street, $postCode, $city);
        $this->setCapabilities($gameType);
    }

    /**
     * Get the value of capabilities
     */ 
    public function getCapabilities()
    {
        return $this->capabilities;
    }

    /**
     * Set the value of capabilities
     *
     * @return  self
     */ 
    public function setCapabilities($capabilities)
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    //output the rider's informations
    public function __toString(): string{
        return parent::__toString()."Job : Rider\n Game type : ".$this->getCapabilities()->getGameType()."\n\n";
    }
}