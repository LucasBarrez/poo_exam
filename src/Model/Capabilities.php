<?php
namespace App\Model;

use Exception;
//This class has responsability to state the capabilities of a rider or a horse etc ...
//To have a largest choice of capabilities, we just have to add a new constant in the array.

class Capabilities{
    //Properties
    private const GAME_TYPE = ['jumping', 'dressage', 'cross', 'PoneyGames'];

    private string $capabilities;

    //Constructor
    public function __construct(string $capabilities){
        $this->setCapabilities($capabilities);
    }

    /**
     * Get the value of capabilities
     * 
     * @return string
     */ 
    public function getCapabilities(): string
    {
        return $this->capabilities;
    }

    /**
     * Set the value of capabilities
     *
     * @return  self
     */ 
    public function setCapabilities($capabilities): self
    {
        if(in_array($capabilities, self::GAME_TYPE)){
            $this->capabilities = $capabilities;
        }else{
            throw new Exception("Invalid game type");
        }
        return $this;
    }

    //output the capabilities' informations
    public function __toString(): string{
        return "Game type : ".$this->getCapabilities()."\n";
    }
}