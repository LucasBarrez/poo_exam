<?php
namespace App\Model;

//Abstract because we will never directly create an instance of this class
// We will use this class to create a equine or dogs ...
abstract class Animal {

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

    //output the animal's informations
    public function __toString(): string{
        return "Name : ".$this->getName()."\n";
    }
}