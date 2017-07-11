<?php
session_start();

//recuperation des variables
if (!empty($_POST['Pseudo']) && !empty($_POST['password'])
&& !empty($_POST['Verif_password'])&& !empty($_POST['email'])
){

        $Pseudo=$_POST['Pseudo'];
        $password=$_POST['password'];
        $Verif_password=$_POST['Verif_password'];
        $email=$_POST['email'];
        $avatar=$_POST['avatar'];

    //connect base
    include "01_connect_service.php";

      //verif pseud<8
      $_SESSION['Pseudo'] = $Pseudo;
      $_SESSION['min8_speudo'] = "";
      $flagspeudo=true;

      if( strlen($Pseudo) < 8 ){
          $_SESSION['min8_speudo'] = "Min 8 caractères";
          $flagspeudo=false;
             
      } 
                         
      //verif nom existant
      $_SESSION['ok_Pseudo'] = "";
      $flag_nbr_speudo=true;

      $reponse = "SELECT COUNT(*) FROM user WHERE username='$Pseudo'";
           
           if ($res = $connexion->query($reponse)) {
                       if ($res->fetchColumn() > 0) {
                        $reponse = "SELECT * FROM user WHERE  username='$Pseudo'";
                                    foreach ($connexion->query($reponse) as $row) {
                                      $_SESSION['ok_Pseudo'] = "Ce nom existe déja";
                                      $_SESSION['min8__speudo'] = "";
                                      $flag_nbr_speudo=false;
                                      

                                                        
                                    }
                        }
  
            }





      //verification password et envoie

      $_SESSION['password'] = $password;
      $_SESSION['min8_pass'] = "";
      $flag_nbr_pass=true;
          
          if( strlen($password) < 8 ){
                 $_SESSION['min8_pass'] = "Min 8 caractères";
                 $flag_nbr_pass=false;

                       
                           
          } 


      //verification password et envoie
        $_SESSION['verif_pass'] = "";
        $_SESSION['Verif_password'] = $Verif_password;
        $flag_verif_pass=true;

        if( $password != $Verif_password ){
            $_SESSION['verif_pass'] = "Password non identique";
            $flag_verif_pass=false;
    
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


        //verif mail existant
          $_SESSION['ok_email'] ="";
          $flag_mail_exist=true;
           $reponse_mail = "SELECT COUNT(*) FROM user WHERE email='$email'";

           if ($res = $connexion->query($reponse_mail)) {
               
                if ($res->fetchColumn() > 0) {
                 
                          $reponse = "SELECT * FROM user WHERE  email='$email'";

                            foreach ($connexion->query($reponse_mail) as $row) {
                              $_SESSION['ok_email'] = "Ce mail existe déja";
                               $_SESSION['verif_mail']  = "";
                               $flag_mail_exist=false;
                               
                                                      
                             }
                 }
   


            }




//insert dans la base
  //echo $flagspeudo;
  
          if($flagspeudo==true && $flag_verif_pass==true && $flag_mail==true && $flag_mail_exist==true && $flag_nbr_pass==true
          && $flag_nbr_speudo==true){

            $req_insert=$connexion->prepare('INSERT INTO user SET username=:username ,user_admin=:user_admin
            ,user_user=:user_user,uPassword=:uPassword , email=:email, avatar=:avatar,datecreate=now()');
            $req_insert->execute(array('username'=>$Pseudo,'user_admin'=>'non','user_user'=>'oui','uPassword'=>$password,'email'=>$email,'avatar'=>$avatar));
            session_destroy();
             header("Location:../view/Form_connexion.php");
            }

          else{
            header("Location:../view/Form_inscription.php");

          }
}

?>