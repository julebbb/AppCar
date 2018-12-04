<?php

declare(strict_types = 1);

class Truck extends Vehicle
{
    protected $door = 2;

    public function __construct(array $array) {
        parent::__construct($array);
    }


    /**
     * Get the value of door
     */ 
    public function getDoor()
    {
                return $this->door;
    }

    /**
     * Set the value of door
     *
     * @return  self
     */ 
    public function setDoor($door)
    {
                $this->door = $door;

                return $this;
    }
}


?>