<?php
namespace App\Model;

abstract class Team{

    // Propriétés
    private array $team;

    // Constructeur
    public function __construct(array $team = []){
        $this->setTeam($team);
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

}