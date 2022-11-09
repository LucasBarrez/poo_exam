<?php
namespace App\Model;

use Exception;
use App\Model\Manager;

//This class has one responsability: to initialize the stable
//This class has one option: a manager
class Stable{

    //Properties
    private string $name;
    private string $adress;
    private string $street;
    private int $postCode;
    private string $city;

    private Manager $manager;

    //Constructor
    //Manager is not mandatory whereas the other properties are
    public function __construct(string $name, string $adress, string $street, int $postCode, string $city){

        if (!isset($name) or !isset($adress) or !isset($street) or !isset($postCode) or !isset($city)){
            throw new Exception("Invalid arguments for Stable : missing arguments \n");
        }else{
            $this->setName($name)
                ->setAdress($adress)
                ->setStreet($street)
                ->setPostCode($postCode)
                ->setCity($city);
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
     * @param string $name
     * @return  self
     */ 
    public function setName($name): self
    {
        if (is_string($name)){
            $this->name = $name;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable : name must be a string\n");
        }

        return $this;
    }

    /**
     * Get the value of adress (email)
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
        if (is_string($adress)){
            $this->adress = $adress;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable {$this->getName()}: adress must be a string\n");
        }
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
        if (is_string($street)){
            $this->street = $street;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable {$this->getName()}: street must be a string\n");
        }
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
     * @param int $postCode
     * @return  self
     */ 
    public function setPostCode($postCode): self
    {
        if (gettype($postCode) == "integer"){
            $this->postCode = $postCode;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable {$this->getName()}: postCode must be an integer\n");
        }
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
        if (is_string($city)){
            $this->city = $city;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable {$this->getName()}: city must be a string\n");
        }
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
        if ($manager instanceof Manager){
            $this->manager = $manager;
            return $this;
        }else{
            throw new Exception("Invalid argument in Stable {$this->getName()}: manager must be an instance of Manager\n");
        }
        return $this;
    }

    //output the stable's informations
    public function __toString(): string
    {
        $str = "Stable's name: {$this->getName()}
        Adress: {$this->getAdress()}
        Street: {$this->getStreet()}
        Post code: {$this->getPostCode()}
        City: {$this->getCity()}\n";

        if (isset($this->manager)){
            $str .= "        Manager: {$this->getManager()->getName()}\n";
        }else{
            $str .= "        Manager: Vacancy job\n";
        }
        return $str;
    }
}