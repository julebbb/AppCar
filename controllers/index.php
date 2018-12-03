<?php

    function loadClasse($classname){
        if(file_exists('../model/'. $classname.'.php')) {
            require '../model/'. $classname.'.php';
        }
        else {
            require '../entities/' . $classname . '.php';
        }
    }
    spl_autoload_register('loadClasse');

   
    $db = Database::DB();

   
    $info = new VehicleManager($db);

    $data = $info->getVehicles();

    foreach ($data as $key) {
        echo $key->getName(). "<br>";
        echo $key->getBrand(). "<br>";
        echo $key->getDoor(). "<br>";
        echo $key->getWheel(). "<br>";

    }
  

    echo "<pre>";
    print_r($info->getVehicles());
    echo "</pre>";

    include "../views/indexVue.php";

 ?>
