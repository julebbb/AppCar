<?php
  include("template/header.php")
?>

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
       
     }elseif ($key->getType() === "motorbike") {
       echo '<i class="fas fa-truck card-img-top text-center" style="color:'. $key->getColor() .';"></i>';
       
     }
 ?>

 
    <h5 class="card-title"><?php echo $key->getBrand() . " " . $key->getModel();?></h5>
    <p class="card-text"></p>
  </a>
  <a href="">Modifier</a>
  <a href="index.php?id=">Supprimer</a>
</div>

<?php
}?>



<p>A afficher sur l'index :</p>
<ul>
  <li>La liste des vehicule dans la base de donnée,</li> 
  <li>Formulaire d'ajout de vehicule :</li>
  <ul>
    <li>couleur</li>
    <li>marque</li>
    <li>nombre de porte</li>
    <li>nombre de roue</li>
    <li>select avec le vehicule choisie</li>
  </ul>
  <li>Pour chaque vehicule un lien pour afficher les détails</li>
  <li>bouton pour supprimer le vehicule</li>
</ul>

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
