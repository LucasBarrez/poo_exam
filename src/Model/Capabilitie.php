<?php
namespace App\Model;


// In the future, we will be abble to add new capabilities to our equines (like swimming, flying, etc.)
//Today, we have only four capability: Jumping, dressage, cross, poney games
abstract class Capabilitie{
    //Properties

    private string $type;

    //Constructor
    public function __construct(string $type){
    }

    /**
     * Get the value of type
     * @return string
     */ 
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type): self
    {
        $this->type = $type;
        return $this;
    }
}