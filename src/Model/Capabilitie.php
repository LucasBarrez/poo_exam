<?php
namespace App\Model;


// In the future, we will be abble to add new capabilities to our equines (like swimming, flying, etc.)
//Today, we have only four capability: Jumping, dressage, cross, poney games
class Capabilitie{
    
    //Attributes
    private const possibilities = ["Jumping", "Dressage", "Cross", "Poney Games"];
    
    //Properties
    private string $name;

    //Constructor
    public function __construct(string $name){
        $this->setName($name);
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->type;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name): self
    {
        if(in_array($name, self::possibilities)){
            $this->name = $name;
        }else{
            echo "The capability must be one of the following : ".implode(", ", self::possibilities)."\n";
        }
        return $this;
    }
}