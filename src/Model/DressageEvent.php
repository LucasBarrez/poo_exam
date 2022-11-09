<?php
namespace App\Model;

use Exception;

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
        if($this->maxCommitmentsAlert($this->getParticipantsList())){
            throw new Exception("You can't add more participants to this event : Complete");
        }
        elseif($this->waterAlert($this->getParticipantsList())){
            throw new Exception("You can't add more participants to this event : Not enough water");
        }
        // elseif(in_array($animal, $this->getParticipantsList())){
        //     throw new Exception("You can't add more participants to this event : Already registered");
        // }
        //more secure with name
        foreach($this->getParticipantsList() as $participant){
            if($participant->getName() === $animal->getName()){
                throw new Exception("You can't add more this participant to this event : Already registered");
            }
        }
        $this->participantsList[] = $animal;
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

    //output information about the event
    public function __toString():string
    {
        $output = parent::__toString();
        $output .= "Participants :\n\n";
        foreach($this->getParticipantsList() as $participant){
            $output .= $participant->getName() . "\n";
        }
        return $output;
    }
}