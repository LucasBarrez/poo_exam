<?php
namespace App\Model;

trait Capabilities{
    
    //Properties
    private Type $type;

    /**
     * Get the value of type
     * @return Type
     */ 
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type):self
    {
        $this->type = $type;

        return $this;
    }
}