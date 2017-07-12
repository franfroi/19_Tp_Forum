<?php
//si non connecter
//les boutons s'affichent
 $logout="";
 $creersujet="";
 //les boutons s'affichent
 $connect='<li>'.'<a href="view/Form_connexion.php"  >'.'Se connecter'.'</a>'.'</li>';
 $compte='<li>'.'<a href="view/Form_inscription.php"  >'.'Créer compte'.'</a>'.'</li>';

//si connecter
session_start();
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
   //les boutons disparaissent
    $connect="";
    $compte="";
    //les boutons s'affichent
    $logout='<li>'.'<a href="model/logout.php"  >'.'Se deconnecter'.'</a>'.'</li>';
    $creersujet='<input id="envoi" type="submit" class="btn btn-info" value="Créer sujet">';
}
?>