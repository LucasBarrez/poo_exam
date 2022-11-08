<?php
namespace App\Model;

use Exception;
//This class has responsability to state the name of a rider or a horse etc ...
//To have a largest choice of name, we just have to add a new constant in the array.
//Make a class Capabilities will provide us to add informations, caracteristics for gametype, game duration etc ..

abstract class Type{
    //Properties

    protected string $name;

    //Constructor
    public function __construct($name){
        $this->setName($name);
    }

    /**
     * Get the value of name
     * 
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
        $this->name = $name;
        return $this;
    }

}