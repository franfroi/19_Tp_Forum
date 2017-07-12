<?php
session_start();

//recuperation des variables
if (!empty($_POST['password'])&&!empty($_POST['email'])){

        
        $password=$_POST['password'];
        $email=$_POST['email'];
       

    //connect base
   include "../../service/01_connect_service.php";

      //verification password et envoie

      $_SESSION['password'] = $password;
      $_SESSION['min8_pass'] = "";
      $flag_nbr_pass=true;
          
          if( strlen($password) < 8 ){
                 $_SESSION['min8_pass'] = "Min 8 caractères";
                 $flag_nbr_pass=false;
                        
          } 
       // verif email
        $_SESSION['email'] = $email;
        $_SESSION['verif_mail'] = "";
        $flag_mail=true;

              if ( !preg_match ( " /^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/ " , $email ) )
              {
              $_SESSION['verif_mail'] = "Mail non valide";
              $flag_mail=false;
                          
              } 

      //verif password existant et mail
      
       $flag_validate=false;
      $repons_validate = "SELECT COUNT(*) FROM user WHERE uPassword='$password' AND email='$email'";
           
           if ($res = $connexion->query($repons_validate)) {
                       if ($res->fetchColumn() > 0) {
                        $repons_validate = "SELECT * FROM user WHERE uPassword='$password'AND email='$email'";
                                    foreach ($connexion->query($repons_validate) as $row) {
                                     $_SESSION['id'] =$row['id'];
                                                                           
                                      $flag_validate=true;
                                      

                                                        
                                    }
                        }
  
            }


  
          if($flag_nbr_pass==true && $flag_mail==true &&  $flag_validate==true){
            
            header("Location:../../index.php");

            }

          else{
            header("Location:../../view/Form_connexion.php");

          }
}

?>