<?php
namespace App\Model;

use Exception;

abstract class Capabilitie{
    //Properties
    private const CAPABILITIES = ['Jumping', 'Dressage', 'Cross', 'PoneyGames'];

    private string $type;

    /**
     * Get the value of type
     * @return string
     */ 
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type): self
    {
        if(in_array($type, self::CAPABILITIES)){
            $this->type = $type;
        }else{
            throw new Exception("Invalid game type");
        }

        return $this;
    }
}