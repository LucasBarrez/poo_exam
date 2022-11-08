<?php
namespace App\Model;

//This class has the responsability to state a Human as a rider

class Rider extends Human{

    //Properties
    private ?Capabilitie $capabilitie = null;

    //Constructor
    public function __construct(string $name, string $adress, string $street, int $postCode, string $city, $capabilitie = null){
        parent::__construct($name, $adress, $street, $postCode, $city);
        if($capabilitie instanceof Capabilitie and $capabilitie !== null){
            $this->setCapabilitie($capabilitie);
        }
        if ($capabilitie !== null and !($capabilitie instanceof Capabilitie)){
            echo "The capabilitie must be an instance of Capabilies class\n";
        }
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
        $str = parent::__toString()."Job : Rider\n";

        if($this->capabilitie !== null){
            $str .= "Game type : ".$this->capabilitie->getName()."\n";
        }

        return $str;
    }
}