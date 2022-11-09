<?php
namespace App\Model;

//This class has the responsability to initialize the human who could be a manager or a ridder or someone else

abstract class Human{

    //Porperties
    private string $name;
    private string $adress;
    private string $street;
    private int $postCode;
    private string $city;


    //Constructor
    public function __construct(string $name, string $adress, string $street, int $postCode, string $city){
        $this->setName($name)
            ->setAdress($adress)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city);
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     * @param string $name
     * @return  self
     */ 
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of adress
     * @return string
     */ 
    public function getAdress(): string
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     * @param string $adress
     * @return  self
     */ 
    public function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of street
     * @return string
     */ 
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * Set the value of street
     * @param string $street
     * @return  self
     */ 
    public function setStreet($street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get the value of postCode
     * @return int
     */ 
    public function getPostCode(): int
    {
        return $this->postCode;
    }

    /**
     * Set the value of postCode
     *
     * @return  self
     */ 
    public function setPostCode($postCode):self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Get the value of city
     * @return string
     */ 
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * Set the value of city
     * @param string $city
     * @return  self
     */ 
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    //output the human's informations
    public function __toString(): string
    {
        return "Name: ".$this->getName()."\nAdress: ".$this->getAdress()."\nStreet: ".$this->getStreet()."\nPost Code: ".$this->getPostCode()."\nCity: ".$this->getCity()."\n";
    }
}