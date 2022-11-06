<?php
namespace App\Model;

//This class has the responsability to state a Human as a rider

class Rider extends Human{
    //Properties
    private Capabilities $gameType;

    //Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, Capabilities $gameType){
        parent::__construct($name, $adress, $street, $postCode, $city);
        $this->setGameType($gameType);
    }

    /**
     * Get the value of capabilities
     * @return Capabilities
     */ 
    public function getGameType(): Capabilities
    {
        return $this->capabilities;
    }

    /**
     * Set the value of capabilities
     *
     * @return  self
     */ 
    public function setGameType($capabilities): self
    {
        $this->capabilities = $capabilities;

        return $this;
    }

    //output the rider's informations
    public function __toString(): string{
        return parent::__toString()."Job : Rider\n Game type : ".$this->getGameType()->getCapabilities()."\n\n";
    }
}