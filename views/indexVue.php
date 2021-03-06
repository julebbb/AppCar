<?php
  include("template/header.php")
?>

<section class="row">

  <!-- Form vehicle -->
  <h3 class="col-12 text-center">Crée un véhicule :</h3>
  <form action="index.php" method="POST" class="col-6 p-5 border text-center m-auto">
    <div class="form-group">
      <label for="type">Sélectionne ton véhicule : </label>
      <p class="text-info">Actuellement séléctionné : <?php echo $selectType;?></p>
      
      <select name="type" id="select">
        <option value="">----</option>
        <option value="car"><a href="index.php?select=car">Voiture</a></option>
        <option value="motorbike"><a href="index.php?select=motorbike">Moto</a></option>
        <option value="truck"><a href="index.php?select=truck">Camion</a></option>
      </select>
      <input type="hidden" name="type" value="<?php echo $select;?>">
    </div>


    <div class="form-group">
      <label for="color">Couleur du véhicule :</label>
      <input type="color" name="color" >
    </div>
    

    <div class="form-group">
      <label for="brand">Marque du véhicule :</label>
      <input type="text" name="brand" class="form-control">
    </div>

      <?php if ($select === "car") {
      ?>
      <div class="form-group">
        <label for="door">Nombre de porte :</label>
        <input type="number" name="door">
      </div>
      <?php
      }?>
    
    <?php if ( $select === "truck") { 
    ?> 
    <div class="form-group">
      <label for="wheel">Nombre de roues :</label>
      <input type="number" name="wheel">
    </div>
    <?php
      }?>
    
    <div class="form-group">
      <label for="model">Model du véhicule :</label>
      <input type="text" name="model" class="form-control">
    </div>

    <div class="form-group">
      <label for="surname">Surnom du véhicule :</label>
      <p class="text-info">Facultatif</p>
      <input type="text" name="surname" class="form-control">
    </div>

    <input type="submit" value="Ajouter" class="btn btn-primary">
  </form>

</section>


<section class="row">
    <h3 class="col-12 mb-2 mt-4">Tous les véhicules :</h3>

  <?php
   foreach ($data as $key) {
  ?>
    <div class="card col-4" style="width: 18rem;">
    <a href="details.php?id=<?php echo $key->getId();?>">
  <?php
     if ($key->getType() === "car") {
       echo '<i class="fas fa-car card-img-top text-center" style="color:'. $key->getColor() .';"></i>';
     } elseif ($key->getType() === "motorbike") {
       echo '<i class="fas fa-motorcycle card-img-top text-center" style="color:'. $key->getColor() .';"></i>';
       
     }elseif ($key->getType() === "truck") {
       echo '<i class="fas fa-truck card-img-top text-center" style="color:'. $key->getColor() .';"></i>';
       
     }
  ?> 
    <h5 class="card-title"><?php echo $key->getBrand() . " " . $key->getModel();?></h5>
    <p class="alert-danger"></p>
    </a>
    <a href="index.php?update=<?php echo $key->getId();?>">Modifier</a>
    <a href="index.php?delete=<?php echo $key->getId();?>">Supprimer</a>
  </div>

<?php
}?>


</section>
 <?php
   include("template/footer.php")
  ?>
