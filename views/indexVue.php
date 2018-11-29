<?php
  include("template/header.php")
 ?>

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

 <?php
   include("template/footer.php")
  ?>
