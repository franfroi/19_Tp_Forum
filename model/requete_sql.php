<?php

//requete qui affiche les sujets associes aux users
$req_aff_sujet = $connexion->query('SELECT user.username,sujet.id,sujet.Titre,sujet.datecreate FROM user AS user
LEFT JOIN sujet AS sujet ON sujet.username_id=user.id WHERE Titre IS NOT NULL ORDER BY sujet.datecreate DESC
');
//requete qui affiche les sujets lié à 1 user
$affiche_sujet_seul = $connexion->prepare("SELECT user.username,sujet.id,sujet.Titre,sujet.datecreate FROM user AS user
 LEFT JOIN sujet AS sujet ON sujet.username_id=user.id WHERE sujet.id=:id");
?>