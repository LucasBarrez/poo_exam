<?php
namespace App\Model;

use App\Model\Equine;


//One Responsability : State a pony and set its gametype

class Pony extends Equine{

    use Capabilities;

    //Attributes
    private const RACE = "Pony";

    //Properties
    private string $gameType;

    public function __construct(string $gameType, string $name, string $id, string $color, string $water, $rider = null)
    {
        parent::__construct($name, $id, $color, $water, $rider);
        $this->setGameType($gameType);
        $this->setType(new Jumping());
    }



    public function __toString(): string
    {
        return "\nRace :".self::RACE."\n".parent::__toString()."Game Type : ".$this->gameType."\n";
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