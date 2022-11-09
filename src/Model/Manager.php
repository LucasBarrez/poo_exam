<?php
namespace App\Model;

//This class has the responsability to state a Human as a Manager

class Manager extends Human{

    //constructor
    public function __construct(string $name, string $adress, string $street, int $postCode, string $city){
        parent::__construct($name, $adress, $street, $postCode, $city);
    }

    //ouput the manager's informations
    public function __toString(): string{
        return parent::__toString()."Job : Manager\n\n";
    }
}