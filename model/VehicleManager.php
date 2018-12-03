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

    /**
     * Display all vehicle
     *
     * @return array
     */
    public function getVehicles() 
    {
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
    /**
     * Add Vehicle into DB
     *
     * @param objet $vehicle
     */
    public function add(objet $vehicle)
    {
        $query = $this->getDb()->prepare('INSERT INTO Vehicles(name, type, color, brand, door, wheel, model) VALUES (:name, :type, :color, :brand, :door, :wheel, :model)');
        $query->bindValue('name', $vehicle->getName(), PDO::PARAM_STR);
        $query->bindValue('type', $vehicle->getType(), PDO::PARAM_INT);
        $query->bindValue('color', $vehicle->getColor(), PDO::PARAM_INT);
        $query->bindValue('brand', $vehicle->getBrand(), PDO::PARAM_INT);
        $query->bindValue('door', $vehicle->getDoor(), PDO::PARAM_INT);
        $query->bindValue('wheel', $vehicle->getWheel(), PDO::PARAM_INT);
        $query->bindValue('model', $vehicle->getModel(), PDO::PARAM_INT);
        $query->execute();

        // On récupère le dernier ID inséré en base de données
        $id = $this->getDb()->lastInsertId();
        // Et on hydrate notre objet pour lui ajouter son ID
        $vehicle->hydrate([
            "id" => $id
        ]);
    }

    /**
     * Update db from $vehicle
     *
     * @param objet $vehicle
     * @return void
     */
    public function edit(objet $vehicle)
    {
        $query = $this->getDb()->prepare('UPDATE FROM Vehicles SET name = :name, type = :type, color = :color, brand = :brand, door = :door, wheel = :wheel, model = :model WHERE id = :id');
        $query->bindValue('id', $vehicle->getId(), PDO::PARAM_INT);
        $query->bindValue('name', $vehicle->getName(), PDO::PARAM_STR);
        $query->bindValue('type', $vehicle->getType(), PDO::PARAM_INT);
        $query->bindValue('color', $vehicle->getColor(), PDO::PARAM_INT);
        $query->bindValue('brand', $vehicle->getBrand(), PDO::PARAM_INT);
        $query->bindValue('door', $vehicle->getDoor(), PDO::PARAM_INT);
        $query->bindValue('wheel', $vehicle->getWheel(), PDO::PARAM_INT);
        $query->bindValue('model', $vehicle->getModel(), PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * Delete vehicle from DB
     *
     * @param objet $vehicle
     */
    public function delete(objet $vehicle)
    {
        $query = $this->getDb()->prepare('DELETE FROM Vehicles WHERE id = :id');
        $query->bindValue('id', $vehicle->getId(), PDO::PARAM_INT);
        $query->execute();
    }
}

?>