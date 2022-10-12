<?php 

require_once './vehicle.php';

class Car extends Vehicle
{
    public const TYPE_OF_ENERGY = ['diesel', 'gasoline', 'LPG', 'ethanol', 
    'hydrogen', 'hybrid', 'electric', 'other'];
    
    protected string $energy;
    protected int $energyLevel=100;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel() : int
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */ 
    public function setEnergyLevel($energyLevel) : self
    {
        if ($energyLevel > 100) {
            $this->energyLevel = 100;
        } elseif ($energyLevel < 0) {
            $this->energyLevel = 0;
        } else {
            $this->energyLevel = $energyLevel;
        }
        return $this;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy() : string
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy(string $energy) : self
    {
        $this->energy = in_array($energy, self::TYPE_OF_ENERGY) ? $energy : 'other';
        return $this;
    }
}

?>