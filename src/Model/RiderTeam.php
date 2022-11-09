<?php
namespace App\Model;

class RiderTeam extends Team{

    //Properties
    private Rider $rider;

    //Constructor
    public function __construct(Rider $rider, array $team = [])
    {
        parent::__construct($team);
        $this->setRider($rider);
    }

    //Count number of equine in team
    public function countEquine(): int
    {
        return count($this->getTeam());
    }

    //For example object Rider can have 5 horses max and a dog
    public function addAnimal(Animal $animal): self
    {
        if ($this->countEquine() < 5) {
            $this->team[] = $animal;
        }else{
            echo "You can't add more than 5 equines in team\n";
        }
        return $this;
    }
    
    public function removeAnimal(Animal $animal): self
    {
        unset($this->team[$animal]);
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
            if(count($this->getTeam()) > 0){
                
                foreach ($this->getTeam() as $member) {
                    $str .= $member->getName() . " (".get_class($member) . ")\n";
                }
            }
    
            $str .= "Number of Equines : " . $this->getTeam()[1] . "\n";
            return $str;
        }
}