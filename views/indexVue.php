<?php
  include("template/header.php")
?>

<section>
  <?php

   foreach ($data as $key) {


?>
    <div class="card" style="width: 18rem;">

<?php
     if ($key->getType() === "car") {
       echo '<i class="fas fa-car card-img-top" style="'. $key->getColor() .'"></i>';
     }
 ?>

 
  <img class="card-img-top" src=".../100px180/" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
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
