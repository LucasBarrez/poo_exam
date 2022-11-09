<?php
namespace App\Model;

use Exception;


class PoneyGamesEvent extends Event{

    //Attributes
    public const EVENT = "PONEYGAMES";

//Properties
    //Today it's an equine Pony games

    private array $participantsList;

    //Constructor
    public function __construct(string $name, string $date, string $location, int $maxWater, int $maxCommitments, array $participantsList = []){
        parent::__construct($name, $date, $location, $maxWater, $maxCommitments);
        $this->setParticipantsList($participantsList);
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
            throw new Exception("You can't add more participants to this event : Complete\n");
        }elseif($this->waterAlert($this->getParticipantsList())){
            throw new Exception("You can't add more participants to this event : Not enough water\n");
        }
        elseif($animal instanceof Horse){
            throw new Exception("You can't add this participant to this event : Horse can't participate to PONEYGAMES\n");
        }
        foreach($this->getParticipantsList() as $participant){
            if($participant->getName() === $animal->getName()){
                throw new Exception("You can't add more this participant to this event : Already registered\n");
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