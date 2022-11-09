<?php
namespace App\Model;

abstract class Team{

    // Propriétés
    private array $team;
    private Human $human;

    // Constructeur
    public function __construct(Human $human, array $team = []){
        $this->setTeam($team)
            ->setHuman($human);
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
     * Get the value of Human
     */ 
    public function getHuman(): Human
    {
        return $this->human;
    }

    /**
     * Set the value of Human
     *
     * @return  self
     */ 
    private function setHuman($human): self
    {
        $this->human = $human;

        return $this;
    }
}