<?php
namespace App\Model;

use Exception;
use App\Model\Animal;

abstract class Team{

    // Propriétés
    protected array $team;

    // Constructeur
    public function __construct(array $team = []){
        if(isset($team)){
            $this->setTeam($team);
        }else{
            throw new Exception("Error : you must enter a team");
        }
    }

    abstract public function addAnimal(Animal $animal): self;

    abstract public function removeAnimal(Animal $animal): self;

    /**
     * Get the value of team
     */ 
    public function getTeam(): array
    {
        return $this->team;
    }

    /**
     * Set the value of team
     *
     * @return  self
     */ 
    private function setTeam($team): self
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Count the number of animals in the team
     *
     * @return integer
     */
    public function countAnimal(): int{
        return count($this->getTeam());
    }

    //output the team's informations
    public function __toString():string
    {
        $str = "Numbers of animals in the team : ".$this->countAnimal()."\n";
        return $str;
    }

}