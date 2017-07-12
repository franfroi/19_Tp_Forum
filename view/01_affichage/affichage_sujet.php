<?php 
 if(isset($_SESSION['id'])){
     $id=$_SESSION['id'];
    //echo $id;
    }


  //affichage bouton  
$enter_sujet='<input id="envoi" type="submit" class="btn btn-info" value="Voir sujet">';

include "service/01_connect_service.php";
include "model/requete_sql.php";

while ($donnees = $req_aff_sujet->fetch())
{
    
    
     ?>

<!--on envoie dans un form pour poster $sujet_id-->

    <form name="form_enter_sujet-<?= $donnees['id'] ?>" method="POST" id="form_enter_sujet-<?php echo $donnees['id'] ?>"  action="view/01_affichage/02_affichage_sujet_seul.php" >
    
<!--on affiche dans tableau-->
<table><tr ><td class="grand"><?= $donnees['Titre']?></td><td><?= $enter_sujet?></td></tr>
<tr class="petit"><td><?= $donnees['username']?><br><?= $donnees['datecreate']?></td></tr></table>

<?php
$sujet_id=$donnees['id'];
//echo $sujet_id;
?>
<input type='hidden' name='sujet-<?= $sujet_id ?>' id='<?= $sujet_id ?>' value='<?= $sujet_id ?>'>
</form>
<?php
$_SESSION['sujet_id']=$donnees['id'];


}

?>