<?php
namespace App\Model;

use Exception;
use App\Model\Event;
use App\Model\Animal;

class CrossEvent extends Event{

    //Attributes
    public const EVENT = "CROSS"; 

    //Properties
    //Today it's an equine cross

    private array $participantsList;

    //Constructor
    public function __construct(string $name, string $date, string $location, int $maxWater, int $maxCommitments, array $participantsList = []){
        parent::__construct($name, $date, $location, $maxWater, $maxCommitments);
        $this->setParticipantsList($participantsList);
    }

    //Methods

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
        }elseif($this->waterAlert($this->getParticipantsList())){
            throw new Exception("You can't add more participants to this event : Not enough water");
        }
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
        if(in_array($animal, $this->getParticipantsList())){
            unset($this->participantsList[array_search($animal, $this->participantsList)]);
            return $this;
        }else{
            throw new Exception("You can't remove this participant from this event : Not registered");
        }
        
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