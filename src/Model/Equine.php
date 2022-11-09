<?php
namespace App\Model;
use App\Model\Animal;

//GOAL : Be abble to create every equine we want from this class

//One responsability : just initialize the common caracteritics of an equine.

//Abstract because we will never directly create an instance of this class
// We will use it to create a horse or a pony ...
abstract class Equine extends Animal{

    //Properties
    private const COLOR = ['ALZAN', 'BAI', 'PIE', 'GREY', 'WHITE'];

    private string $id;
    private string $color;
    private string $water;

    //In option: a rider 
    private Rider $rider;

    //Constructor
    public function __construct(string $name, string $id, string $color, string $water){
        parent::__construct($name);
        $this->setId($id)
            ->setColor($color)
            ->setWater($water);

    }

    /**
     * Get the value of id
     * @return string
     */
    public function getId(): string 
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of color
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color): self
    {
        $color = str_replace(" ", "", $color);
        $color = strtoupper($color);
        if(in_array($color, self::COLOR)){
            $this->color = $color;
        }else{
            echo("The color must be Alzan, Bai, Pie, Grey or White\n");
        }
        return $this;
    }

    /**
     * Get the value of water
     * @return int
     */
    public function getWater(): int
    {
        return $this->water;
    }

    /**
     * Set the value of water
     *
     * @return  self
     */
    public function setWater($water): self
    {
        $this->water = $water;

        return $this;
    }
    
    /**
     * Get the value of rider
     * @return Rider
     */ 
    public function getRider(): Rider
    {
        return $this->rider;
    }

    /**
     * Set the value of rider
     *
     * @return  self
     */ 
    public function setRider($rider): self
    {
        $this->rider = $rider;

        return $this;
    }

    //output the equine's informations
    public function __toString(): string{
        $str = parent::__toString()."Id : ".$this->getId()."\nColor : ".$this->getColor()."\nWater : ".$this->getWater()."\n";
        if(isset($this->rider)){
            $str .= "Rider : ".$this->getRider()->getName()."\n";
        }else{
            $str .= "Rider : None\n";
        }
        return $str;
    }
}