<?php
namespace App\Model;

use Exception;

class Capabilities{
    //Properties
    private const GAME_TYPE = ['jumping', 'dressage', 'cross', 'PoneyGames'];

    private string $gameType;

    //Constructor
    public function __construct(string $gameType){
        $this->setGameType($gameType);
    }

    /**
     * Get the value of gameType
     * @return string
     */ 
    public function getGameType(): string
    {
        return $this->gameType;
    }

    /**
     * Set the value of gameType
     *
     * @return  self
     */ 
    public function setGameType($gameType): self
    {
        if(in_array($gameType, self::GAME_TYPE)){
            $this->gameType = $gameType;
        }else{
            throw new Exception("Invalid game type");
        }
        return $this;
    }

    //output the capabilities' informations
    public function __toString(): string{
        return "Game type : ".$this->getGameType()."\n";
    }
}