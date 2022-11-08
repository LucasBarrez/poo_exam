<?php
namespace App\Model;

//This class has the responsability to state a Human as a rider

class Rider extends Human{

    use Capabilities;

    //Properties
    public string $gameType;

    //Constructor
    public function __construct(string $gameType, string $name, string $adress, string $street, string $postCode, string $city){
        parent::__construct($name, $adress, $street, $postCode, $city);
        $this->setGameType($gameType);
        $this->setType(new Jumping());
    }


    //output the rider's informations
    public function __toString(): string{
        return parent::__toString()."Job : Rider\nGame type : ".$this->getGameType()."\n\n";
    }

    /**
     * Get the value of gameType
     */ 
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     *
     * @return  self
     */ 
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;

        return $this;
    }
}