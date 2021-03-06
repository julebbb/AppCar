<?php

declare(strict_types = 1);

class Car extends Vehicle
{
    protected $wheel = 4;

    public function __construct(array $array) {
        parent::__construct($array);
    }
              

    /**
     * Get the value of wheel
     */ 
    public function getWheel()
    {
        return $this->wheel;
    }

    /**
     * Set the value of wheel
     *
     * @return  self
     */ 
    public function setWheel($wheel)
    {
        $this->wheel = $wheel;

        return $this;
    }
}


?>