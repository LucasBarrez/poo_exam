<?php
namespace App\Model;

use Exception;


// In the future, we will be abble to add new capabilities to our equines (like swimming, flying, etc.)
//Today, we have only four capability: Jumping, dressage, cross, poney games
class Capabilitie{
    
    //Attributes : all in uppercase and without spaces
    private const possibilities = ["JUMPING", "DRESSAGE", "CROSS", "PONYGAMES"];
    
    //Properties
    private string $name;

    //Constructor
    public function __construct(string $name){
        if (isset($name)) {
            $this->setName($name);
        }else{
            throw new Exception("Error : you must enter a name for the capability\n");  
        }
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name): self
    {
        $name = str_replace(" ", "", $name);
        $name = strtoupper($name);
        if(in_array($name, self::possibilities)){
            $this->name = $name;
        }else{
            throw new Exception("The capability must be one of the following : ".implode(", ", self::possibilities)."\n");
        }
        return $this;
    }

    public function __toString(): string{
        return $this->name;
    }
}