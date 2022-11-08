<?php
namespace App\Model;

//This class has the responsability to state a Human as a rider

class Rider extends Human{

    //Properties
    private ?Capabilitie $capabilitie = null;

    //Constructor
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, $capabilitie = null){
        parent::__construct($name, $adress, $street, $postCode, $city);
        $this->setCapabilitie($capabilitie);
    }

    /**
     * Get the value of capabilitie
     */
    public function getCapabilitie()
    {
        return $this->capabilitie;
    }

    /**
     * Set the value of capabilitie
     *
     * @return  self
     */
    public function setCapabilitie($capabilitie)
    {
        $this->capabilitie = $capabilitie;

        return $this;
    }

    //output the rider's informations
    public function __toString(): string{
        return parent::__toString()."Job : Rider\nGame type : ".$this->getCapabilitie()->getName()."\n\n";
    }
}