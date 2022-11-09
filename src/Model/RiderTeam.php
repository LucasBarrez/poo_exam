<?php
namespace App\Model;

use Exception;

//This class has the responsability to set the team of riders
//It is open to be extends to add more specific methods and can be used to create a time of dogs, equines, etc...

class RiderTeam extends Team{

    //Properties
    private Rider $rider;

    //Constructor
    public function __construct(Rider $rider, array $team=[])
    {
        parent::__construct($team);
        $this->setRider($rider);
    }

    public function countEquine(): int{
        $count = 0;
        foreach($this->getTeam() as $animal){
            if($animal instanceof Equine){
                $count++;
            }
        }
        return $count;
    }

    //For example object Rider can have 5 horses max and a dog
    public function addAnimal(Animal $animal): self
    {
        if ($this->countEquine() < 5) {
            $this->getTeam[] = $animal;
        }else{
            throw new Exception("You can't add more than 5 equines in team\n");
        }
        //Problem with count also to test :
        $this->getTeam[] = $animal;
        return $this;
    }
    
    public function removeAnimal(Animal $animal): self
    {
        unset($this->getTeam[$animal]);
        return $this;
    }
    
    /**
     * Get the value of rider
     */ 
    public function getRider()
    {
        return $this->rider;
    }
    
    /**
     * Set the value of rider
     *
     * @return  self
     */ 
    public function setRider($rider)
    {
        $this->rider = $rider;
        
        return $this;
    }
    
    public function __toString(): string
    {
        $str = "Rider (owner): {$this->getRider()->getName()}\n";
        if(count($this->getTeam()) >= 0){
            
        foreach ($this->getTeam() as $member) {
            $str .= $member->getName() . " (".get_class($member) . ")\n";
        }
        }
        $count = $this->countEquine();
        $str .= "Number of Equines : " . $count . "\n";
        return $str;
    }
}