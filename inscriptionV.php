<?php

    $nom=($_POST['nom']);
    $prenom=($_POST['prenom']);
    $email=($_POST['mail']);
    $mdp=($_POST['mdp']);
    $rmdp=($_POST['rmdp']);

    if($nom&&$prenom&&$email&&$mdp)   {
        if($mdp==$rmdp){
            $con=mysqli_connect('localhost','root','','archeologique') or die ("Erreur");
          
            $sql="insert into visiteur(nom,prenom,mail,mdp) values ('".$nom."','".$prenom."','".$email."','".$mdp."')";
           $res=mysqli_query($con,$sql);
           
          die("inscription terminée");

        }else{echo("le mdp et le rmdp ne sont pas identique");}
    }else{echo("veillez saisir tous les champs");}


?>