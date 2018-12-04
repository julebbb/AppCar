<?php

declare(strict_types = 1);

class Truck extends Vehicle
{
    protected $type = "truck",
              $door = 2;

    public function __construct(array $array) {
        $array->type = $this->getType();
        $array->door = $this->getDoor();
        parent::__construct($array);
    }
            


    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
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