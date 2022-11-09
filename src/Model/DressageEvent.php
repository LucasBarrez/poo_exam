<?php
namespace App\Model;

class DressageEvent extends Event{

    //Attributes
    public const EVENT = "DRESSAGE";

//Properties
    //Today it's an equine cross

    private array $participantsList;

    //Constructor
    public function __construct(string $name, string $date, string $location, int $maxWater, int $maxCommitments, array $participantsList = []){
        parent::__construct($name, $date, $location, $maxWater, $maxCommitments);
        $this->setParticipantsList($participantsList);
    }

    /**
     * Set the value of participantsList
     *
     * @return  self
     */ 
    public function setParticipantsList($participantsList)
    {
        $this->participantsList = $participantsList;

        return $this;
    }

    /**
     * Get the list of participants
     *
     * @return array
     */
    public function getParticipantsList(): array
    {
        return $this->participantsList;
    }

    /**
     * Add new participants to the cross event
     *
     * @param Animal $animal
     * @return self
     */
    public function addParticipant(Animal $animal):self
    {
        return $this;
    }


    /**
     * remove participants from the cross event
     *
     * @param Animal $animal
     * @return self
     */
    public function removeParticipant(Animal $animal):self
    {
        return $this;
    }

}