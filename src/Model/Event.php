<?php
namespace App\Model;

use Exception;
use App\Model\Animal;


// All events will have a name, a date, a location, a list of participants ...
abstract class Event{
    //Properties
    private string $name;
    private string $date;
    private string $location;
    private int $maxCommitments;
    private int $maxWater;

    
    //Constructor
    public function __construct(string $name, string $date, string $location, int $maxWater, int $maxCommitments)
    {
        if(isset($name)){
            $this->setName($name);
        }else{
            throw new Exception("Error : you must enter a name");
        }
        if(isset($date)){
            $this->setDate($date);
        }else{
            throw new Exception("Error : you must enter a date");
        }
        if(isset($location)){
            $this->setLocation($location);
        }else{
            throw new Exception("Error : you must enter a location");
        }
        if(isset($maxWater)){
            $this->setMaxWater($maxWater);
        }else{
            throw new Exception("Error : you must enter a maxWater");
        }
        if(isset($maxCommitments)){
            $this->setMaxCommitments($maxCommitments);
        }else{
            throw new Exception("Error : you must enter a maxCommitments");
        }
    }

    //Arguments are animals, because this event class is abble to state an event for every animal.
    // Open to scale ? Oh yeah
    abstract public function getParticipantsList():array;
    abstract public function addParticipant(Animal $animal):self;
    abstract public function removeParticipant(Animal $animal):self;
    
    /**
     * Set water alert
     * Common for each event
     *
     * @param array $participants
     * @return boolean
     */
    public function waterAlert(array $participants):bool
    {
        $water = 0;
        foreach($participants as $participant){
            $water += $participant->getWater();
        }
        if($water > $this->getMaxWater()){
            return true;
        }else{
            return false;
        }
    }


    /**
     * Set max commitments alert
     * Common for each event
     *
     * @param array $participants
     * @return boolean
     */
    public function maxCommitmentsAlert(array $participants):bool
    {
        if(count($participants) >= $this->getMaxCommitments()){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of maxCommitments
     * @return int
     */ 
    public function getMaxCommitments(): int
    {
        return $this->maxCommitments;
    }

    /**
     * Set the value of maxCommitments
     * @param int $maxCommitments
     * @return  self
     */ 
    public function setMaxCommitments($maxCommitments): self
    {
        $this->maxCommitments = $maxCommitments;

        return $this;
    }

    /**
     * Get the value of MaxWater
     * @return int
     */ 
    public function getMaxWater(): int
    {
        return $this->maxWater;
    }

    /**
     * Set the value of MaxWater
     * @param int
     * @return  self
     */ 
    public function setMaxWater($maxWater):self
    {
        $this->maxWater = $maxWater;

        return $this;
    }

    /**
     * Get the value of date
     * @return string
     */ 
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * Set the value of date
     * @param string $date
     * @return  self
     */ 
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of location
     * @return string
     */ 
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * Set the value of location
     * @param string $location
     * @return  self
     */ 
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    //output informations about the event
    public function __toString():string
    {
        return "Event name : ".$this->getName()."\ndate : ".$this->getDate()."\nlocation : ".$this->getLocation()."\nmax commitments : ".$this->getMaxCommitments()."\max water : ".$this->getMaxWater()."\n";
    }
}