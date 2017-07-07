<?php 
function getPage(){
    if(isset($_GET['page'])){
$page=$_GET['page'];
}
        else {
            $page='login';
            }

            return $page;
}
 function getUser(){
      // appel en base de donnees


      //ici on cree un tableau manuellement
     $user=["alphonso","ledebutant@yahoo.fr"];
     return $user;
 }

function getDescription(){
    // appel en base de donnees

     return "programming coach";
    
 }



?>