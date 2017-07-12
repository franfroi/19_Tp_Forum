<?php
session_start();
if(!empty($_SESSION['id'])!empty($_SESSION['id_sujet'])){
    $id=$_SESSION['id'];
$id_sujet=$_SESSION['id_sujet'];

//recuperation des variables
// if (!empty($_POST['Titre']) 
// ){

//         $Titre=$_POST['Titre'];
        
       

//     //connect base
//     include "01_connect_service.php";

     

// //insert dans la base
 
  
        

//             $req_insert_sujet=$connexion->prepare('INSERT INTO message SET mess=:mess,  id_sujet=:id_sujet,datecreate=now()');
//             $req_insert_sujet->execute(array('mess'=>$mess,'id_sujet'=>$id_sujet));
//             //$_SESSION['id_sujet']=$id_sujet;
//             header("Location:../service/affichage_toussujet.php");
//             }
// }
//           else{
//             header("Location:../view/Form_inscription.php");

//           }


?>