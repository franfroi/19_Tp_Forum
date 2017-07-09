<?php 
include_once("model/fonction.php");

/**
* Alfonso: l'index.php devrait être ce fichier. J'imagine que tu as rapatrier
 * un template qui avait un index.html et tu l'as renommé pour pouvoir tester
 * les styles.
 *
 * Attention à faire trop ceci car ça breaker le système.
 * l'index.html que tu as importé est sensé être une vue qui doit résider dans le
 * dossier view/ et tu dois donc ajusté les chemin js/ et css/
 * à priori non puisqu'on appel les vu depuis l'index2.php
 * (qui doit s'appeler index.php)
 * Donc à mon avis tu aurais pu l'insérer direment dans view/
 * On en reparle.
 */
$page=getpage();

switch($page){
    case 'login':
include("view/login.php");
    break;
    case 'wall':
    $user=getUser();
    var_dump($user);
    $description=getDescription();
include("view/wall.php");
    break;

    case 'Form':
    
    include("model/fonction2.php");
   
    $user=getUser2();
    $description=getDescription2();
    $NombreUtilisateur=NombreUtilisateur();
    var_dump($NombreUtilisateur);
 include("view/Form.php");
    
    break;
}

?>
