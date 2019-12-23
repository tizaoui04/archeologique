<?php

$db_server = 'localhost'; // Adresse du serveur MySQL
$db_name = 'archeologique';            // Nom de la base de données
$db_user_login = 'root';  // Nom de l'utilisateur
$db_user_pass = '';       // Mot de passe de l'utilisateur

// Ouvre une connexion au serveur MySQL
$conn =mysqli_connect('localhost','root','','archeologique') or die ("Erreur");

 // Récupère la recherche
 $recherche = isset($_POST['recherche']) ? $_POST['recherche'] : '';

 // la requete mysql
 /*$q = $conn->query(
 "SELECT labelle, idexpert FROM site disponibilite 
  WHERE champ1 LIKE '%$recherche%'
  OR champ2 LIKE '%$recherche%'
  LIMIT 10");

 // affichage du résultat
 while( $r = mysqli_fetch_array($q)){
 echo 'Résultat de la recherche: '.$r['champ1'].', '.$r['champ2'].' <br />'
;
 }*/
?>