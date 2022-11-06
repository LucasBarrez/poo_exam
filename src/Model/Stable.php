<?php
namespace App\Model;

use Exception;

//This class has one responsability: to initialize the stable
class Stable{

    //Properties

    private string $name;
    private string $adress;
    private string $street;
    private string $postCode;
    private string $city;

    //Human who is in charge of the stable
    private ?Manager $manager = null;

    //Constructor
    //Manager is not mandatory whereas the other properties are
    public function __construct(string $name, string $adress, string $street, string $postCode, string $city, $manager = null){
        $this->setName($name)
            ->setAdress($adress)
            ->setStreet($street)
            ->setPostCode($postCode)
            ->setCity($city);
        if($manager instanceof Manager and $manager !== null){
            $this->setManager($manager);
        }
        if ($manager !== null and !($manager instanceof Manager)){
            die("The manager must be an instance of Manager class\n");
        }
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
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
     *
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
     *
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
    public function setPostCode($postCode): self
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
     *
     * @return  self
     */ 
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of manager
     * @return Manager
     */ 
    public function getManager(): Manager
    {
        return $this->manager;
    }

    /**
     * Set the value of manager
     *
     * @return  self
     */ 
    public function setManager($manager): self
    {
        $this->manager = $manager;
        return $this;
    }

    //output the stable's informations
    public function __toString(): string
    {
        $str = "Stable's name: {$this->getName()}\n
        Adress: {$this->getAdress()}\n
        Street: {$this->getStreet()}\n
        Post code: {$this->getPostCode()}\n
        City: {$this->getCity()}\n\n";

        if ($this->manager){
            $str .= "        Manager:  True\n";
        }else{
            $str .= "        Manager:  Vacancy job\n";
        }
        return $str;
    }
}