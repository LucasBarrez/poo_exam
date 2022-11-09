<?php
namespace App\Model;

class RiderTeam extends Team{

    //Constructor
    public function __construct(Human $human, array $team = [])
    {
        parent::__construct($human, $team = []);
    }

    public function addAnimal(Animal $animal): self
    {
        
        return $this;
    }
    
    public function removeAnimal(Animal $animal): self
    {
        return $this;
    }
}