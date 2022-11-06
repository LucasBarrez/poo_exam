<?php
namespace App\Model;
use App\Model\Animal;

//Abstract because we will never directly create an instance of this class
// We will use it to create a horse or a pony ...
abstract class Equine extends Animal{

    //Properties
    private const COLOR = ['Alzan', 'Bai', 'Pie', 'Grey', 'White'];

    private string $id;
    private string $color;
    private string $water;

    //In option: a rider 
    private ?Rider $rider = null;

    //Counter to know how many equines we have created
    private static int $counter = 0;

    //Constructor
    public function __construct(string $name, string $id, string $color, string $water, $rider = null){
        parent::__construct($name);
        $this->setId($id)
            ->setColor($color)
            ->setWater($water);
        if($rider instanceof Rider and $rider !== null){
            $this->setRider($rider);
        }
        if ($rider !== null and !($rider instanceof Rider)){
            die("The rider must be an instance of Rider class\n");
        }
        self::$counter++;
    }

    /**
     * Set Category of the equine
     * @param Capabilitie $category
     * @return self
     */

    public function setCategory(Capabilitie $category): self
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get Category of the equine
     * @return Capabilitie
     */
    public function getCategory(): Capabilitie
    {
        return $this->category;
    }

    /**
     * Get the value of equine (counter)
     * @return int
     */
    public static function getCounter():int {
        return self::$counter;
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
        if(!in_array($color, self::COLOR)){
            die("The color must be Alzan, Bai, Pie, Grey or White\n");
        }else{
            $this->color = $color;
        }

        return $this;
    }

    /**
     * Get the value of water
     * @return string
     */
    public function getWater(): string
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
        if($this->rider){
            $str .= "Rider : ".$this->getRider()->getName()."\n";
        }else{
            $str .= "Rider : None\n";
        }
        return $str;
    }
}