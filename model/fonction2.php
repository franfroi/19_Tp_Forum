<?php 

 
function getUser2(){
      // appel en base de donnees
if (!empty($_POST['user']) ){

$user=$_POST['user'];

     return $user;
 }}

function getDescription2(){
    if (!empty($_POST['description']) ){

$description=$_POST['description'];
     return $description;
 }}
 
function NombreUtilisateur(){
    
     return "255";
 }


?>