<?php 

require_once './vehicle.php';

class Truck extends Car
{
    private int $capacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setCapacity($capacity);
    }


    /**
     * Get the value of loading
     */ 
    public function getLoading()
    {
        return $this->loading;
    }
    
    public function isLoaded()
    {
        return ($this->loading < $this->capacity) ? 'in filling' : 'full';
    }

    /**
     * Set the value of loading
     *
     * @return  self
     */ 
    public function setLoading($loading) : self
    {
        switch (true) {
            case $loading < 0:
                $this->loading = 0;
                break;
            case $loading > $this->capacity:
                $this->loading = $this->capacity;
                echo 'Warning Truck is overloaded !';
                break;
            default:
                $this->loading = $loading;
                echo 'Truck is Loaded';
        }
        return $this;
    }

    /**
     * Get the value of capacity
     */ 
    public function getCapacity() : int
    {
        return $this->capacity;
    }

    /**
     * Set the value of capacity
     *
     * @return  self
     */ 
    public function setCapacity($capacity) : self
    {
        $this->capacity = $capacity<0 ? 0 : $capacity;
        return $this;
    }
}

?>
