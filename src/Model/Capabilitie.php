<?php
namespace App\Model;


// In the future, we will be abble to add new capabilities to our equines (like swimming, flying, etc.)
//Today, we have only four capability: Jumping, dressage, cross, poney games
abstract class Capabilitie{
    //Properties

    private string $name;

    //Constructor
    public function __construct(string $name){
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
        $this->name = $name;
        return $this;
    }
}