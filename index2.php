<?php 
include_once("model/fonction.php");


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
