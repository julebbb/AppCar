<?php

declare(strict_types = 1);

 class Vehicle 
{

    protected $id,
              $name,
              $type,
              $color,
              $brand,
              $door,
              $wheel,
              $model;

    public function __construct(array $array) 
    {
        $this->hydrate($array);
    }

    /**
     * Hydratation
     *
     * @param array $donnees
     */
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
                
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }


    /**
     * Get the value of model
     */ 
    public function getModel()
    {
                return $this->model;
    }

    /**
     * Set the value of model
     *
     * @return  self
     */ 
    public function setModel($model)
    {
                $this->model = $model;

                return $this;
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

    /**
     * Get the value of brand
     */ 
    public function getBrand()
    {
                return $this->brand;
    }

    /**
     * Set the value of brand
     *
     * @return  self
     */ 
    public function setBrand($brand)
    {
                $this->brand = $brand;

                return $this;
    }

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
                return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor($color)
    {
                $this->color = $color;

                return $this;
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
     * Get the value of name
     */ 
    public function getName()
    {
                return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
                $this->name = $name;

                return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}


?>