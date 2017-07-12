<?php 
session_start();
//rattrape le post
$key = array_keys($_POST);
$string = substr($key[0],0,6);
$index = substr($key[0],6,7);
//var_dump( $index);die();

        if($string == "sujet-"){
            $sujet_id = $index;
            
            $creerMessage="";
           
        }
 
  
  //session
            if(isset($_SESSION['id'])){
                //si session on cree un bouton
            $creerMessage='<input id="envoi" type="submit" class="btn btn-info" value="Créer message">';
           $sujet_id = $index;
            //echo $sujet_id;
            }
            if(empty($_SESSION['id'])&& empty($_SESSION['sujet_id'])){
                //on enleve le bouton si pas de session
                $creerMessage="";
            }

include "../../service/01_connect_service.php";
include "../../model/requete_sql.php";
 
 
$affiche_sujet_seul->execute(array('id'=>$sujet_id));
$donnees = $affiche_sujet_seul->fetchAll(PDO::FETCH_ASSOC);

 foreach($donnees as  $value)
    {
    
    //on affiche dans tableau
 ?>  
  
 <table><tr ><td class="grand"><?= $value['Titre']?></td><td><?= $creerMessage?></td></tr>
   <tr class="petit"><td><?= $value['username']?><br><?= $value['datecreate']?></td></tr></table>

<?php
 }
?>  


