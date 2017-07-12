<?php
session_start();
if(!empty($_SESSION['id'])){
    $id=$_SESSION['id'];


//recuperation des variables
if (!empty($_POST['Titre']) 
){

        $Titre=$_POST['Titre'];
        
       

    //connect base
   include "../../service/01_connect_service.php";

     

//insert dans la base
 
  
        

            $req_insert_sujet=$connexion->prepare('INSERT INTO sujet SET titre=:titre,  username_id=:username_id,datecreate=now()');
            $req_insert_sujet->execute(array('titre'=>$Titre,'username_id'=>$id));
            $_SESSION['Titre']=$Titre;
            header("Location:../../index.php");
            }
}
          else{
            header("Location:../view/Form_inscription.php");

          }


?>