<?php
namespace App\Model;

use Exception;

//Abstract because we will never directly create an instance of this class
// We will use this class to create a equine or dogs ...
abstract class Animal {

    //Properties
    private string $name;

    //Constructor
    public function __construct(string $name){
        if(isset($name)){
            $this->setName($name);
        }else{
            throw new Exception("Error : you must enter a name for the animal");
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
        $this->name = $name;

        return $this;
    }

    //output the animal's informations
    public function __toString(): string{
        return "Name : ".$this->getName()."\n";
    }
}