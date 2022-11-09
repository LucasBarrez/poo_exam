<?php
namespace App\Model;


// All events will have a name, a date, a location, a type and a list of participants
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
        $this->setName($name)
            ->setDate($date)
            ->setLocation($location)
            ->setMaxWater($maxWater)
            ->setMaxCommitments($maxCommitments);
    }

    //Arguments are animals, because this event class is abble to state an event for every animal.
    // Open to scale ? Oh yeah
    abstract public function getParticipantsList():array;
    abstract public function addParticipant(Animal $animal):self;
    abstract public function removeParticipant(Animal $animal):self;


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of maxCommitments
     */ 
    public function getMaxCommitments()
    {
        return $this->maxCommitments;
    }

    /**
     * Set the value of maxCommitments
     *
     * @return  self
     */ 
    public function setMaxCommitments($maxCommitments)
    {
        $this->maxCommitments = $maxCommitments;

        return $this;
    }

    /**
     * Get the value of MaxWater
     */ 
    public function getMaxWater()
    {
        return $this->maxWater;
    }

    /**
     * Set the value of MaxWater
     *
     * @return  self
     */ 
    public function setMaxWater($maxWater)
    {
        $this->maxWater = $maxWater;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get the value of location
     */ 
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     *
     * @return  self
     */ 
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

}