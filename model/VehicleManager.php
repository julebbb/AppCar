<?php

declare(strict_types = 1);

class VehicleManager 
{
    private $_db;

    /**
    * constructor
    *
    * @param PDO $db
    */
    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

      /**
     * Get the value of _db
     */ 
    public function getDb()
    {
        return $this->_db;
    }

    /**
     * Set the value of _db
     *
     * @param PDO $db
     * @return  self
     */ 
    public function setDb(PDO $db)
    {
        $this->_db = $db;

        return $this;
    }

    // Il faut un element pour afficher tous les vehicules
    public function getVehicles() {
        $arrayOfVehicles = [];

        $query = $this->getDb()->query('SELECT * from Vehicles');
        $dataVehicles = $query->fetchAll(PDO::FETCH_ASSOC);

        foreach ($dataVehicles as $dataVehicle) {
            if(in_array('car', $dataVehicle, true)) {
                $arrayOfVehicles[] = new Car($dataVehicle); 
            } elseif (in_array('motorbike', $dataVehicle, true)) {
                $arrayOfVehicles[] = new Motorbike($dataVehicle);
            } else {
                $arrayOfVehicles[] = new Truck($dataVehicle);
            } 
        }

        return $arrayOfVehicles;
    }
    // Un element pour ajouter un vehicule

    // Pour le modifier

    // Pour le supprimer
}

?>