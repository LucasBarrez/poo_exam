<?php
namespace App\Model;

//One Responsability : State a horse and set its gametype

class Horse extends Equine{
    //properties
    private string $capabilitieName;

    public function __construct(string $capabilitieName, string $name, string $id, string $color, string $water, $rider = null)
    {
        parent::__construct($name, $id, $color, $water, $rider = null);
        $this->setCapabilitieName($capabilitieName)
            ->setCategory(new Capabilities($capabilitieName));

    }

    /**
     * Get the value of capabilitieName
     */
    public function getCapabilitieName()
    {
        return $this->capabilitieName;
    }

    /**
     * Set the value of capabilitieName
     *
     * @return  self
     */ 
    public function setCapabilitieName($capabilitieName)
    {
        $this->capabilitieName = $capabilitieName;

        return $this;
    }

    public function __toString(): string
    {
        return parent::__toString();
    }
}