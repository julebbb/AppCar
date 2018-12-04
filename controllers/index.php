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
   
    $vehicleManager = new VehicleManager($db);

    $data = $vehicleManager->getVehicles();

    //Prepare for add vehicle in manager
    
    if (isset($_POST['color']) AND isset($_POST['type']) AND isset($_POST['brand']) AND isset($_POST['model']) 
    AND !empty($_POST['color']) AND !empty($_POST['type']) AND !empty($_POST['brand']) AND !empty($_POST['model'])) {
        $color = strip_tags($_POST['color']);
        $type = strip_tags($_POST['type']);
        $brand = strip_tags($_POST['brand']);
        $model = strip_tags($_POST['model']);

        if ($type === "car") {
            
            if (isset($_POST['door']) AND !empty($_POST['door'])) {
                $door = (int) $_POST['door'];
                
                if ($door > 1 AND $door <= 5) {
                    $car = array (
                        "color" => $color,
                        "type" => $type,
                        "brand" => $brand,
                        "model" => $model,
                        "door" => $door
                    );

                    if (isset($_POST['surname']) AND !empty($_POST['surname'])) {
                        $name = strip_tags($_POST['surname']);
                        $car['name'] = $name;

                        $createCar = new Car($car);
                        
                        echo "<pre>";
                        print_r($createCar);
                        echo "</pre>";
                    }
                }


            }

        } elseif ($type === "truck") {
            # code...
        } elseif ($type === 'motorbike') {
            # code...
        }

    }

    //If they are not get Select
    //If they are, change type of vehicle
    $selectType = "Voiture";
    $select = "car";
    
    if (isset($_GET['select']) AND !empty($_GET['select'])) {
        if ($_GET['select'] === "motorbike") {
            $selectType = "Moto";
        } elseif ($_GET['select'] === "truck") {
            $selectType = "Camion";
        }
       
        $select = $_GET['select'];
    }
    //préparation pour update

    //Prepare for delete vehicle
    if (isset($_GET['delete']) AND !empty($_GET['delete'])) {
        $delete = (int) $_GET['delete'];
        if ($delete > 0) {
            $vehicleManager->delete($delete);
            header('Location: index.php');
        }
    }

    // echo "<pre>";
    // print_r($info->getVehicles());
    // echo "</pre>";

    include "../views/indexVue.php";

 ?>
