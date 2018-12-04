<?php
  include("template/header.php")
?>

<section class="row">
  <h3 class="col-12">Crée un véhicule : <?php echo $selectType;?></h3>
  <form action="index.php" method="POST" class="col-6 p-5 border">
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
      <label for="wheels">Nombre de roues :</label>
      <input type="number" name="color">
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


<section>
  <?php
   foreach ($data as $key) {
  ?>
    <div class="card" style="width: 18rem;">
    <a href="#">
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

<p>Pour les détails :</p>
<ul>
  <li>Infos du véhicule</li>
  <li>lien pour modifier celui ci</li>
  <li>bouton suppr</li>
</ul>
</section>
 <?php
   include("template/footer.php")
  ?>
