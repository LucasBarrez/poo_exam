<?php
namespace App\Model;


class PoneyGames extends Type{

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

}