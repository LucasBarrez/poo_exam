<?php
namespace App\Model;

class RiderTeam extends Team{

    //Constructor
    public function __construct(Human $human, array $team = [])
    {
        parent::__construct($human, $team = []);
    }

    public function getEquineNumber():int
    {
        $equineNumber = 0;
        foreach ($this->team as $animal) {
            if ($animal instanceof Equine) {
                $equineNumber++;
            }
        }
        return $equineNumber;
    }

    public function addAnimal(Animal $animal): self
    {
        if ($this->getEquineNumber() < 5) {
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

    public function __toString(): string
    {
        $str = "Team owner : " . $this->getHuman()->getName(). "\n";
        foreach ($this->team as $member) {
            $str .= $member . " (".get_class($member) . ")\n";
        }

        $str .= "Number of Equines : " . $this->getEquineNumber() . "\n";

        return $str;
    }
}