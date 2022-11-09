<?php
namespace App\Model;

class Team{

    // Propriétés
    private array $team;
    private Human $human;

    // Constructeur
    public function __construct(Human $human, array $team = []){
        $this->setTeam($team)
            ->setHuman($human);
    }

    public function addAnimal(Animal $animal): self
    {
        $this->team[] = $animal;

        return $this;
    }

    public function removeAnimal(Animal $animal): self
    {
        // TO DO delete animal from array
        return $this;
    }

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
     * Set the value of dresseur
     *
     * @return  self
     */ 
    private function setHuman($human): self
    {
        $this->human = $human;

        return $this;
    }
}