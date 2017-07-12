<?php 

/*
 * Alfonso: je pense que ce travail avec les variables que tu fais
 * devrait être dans le controleur (index.php)
 * */
session_start();

$Pseudo="" ;
 $Pseudo_nbr="";
 $Pseudo_exist="";
 $password="";
$password_nbr="";
$verif_pass="";
$verif_mail="";
$email="";
$ok_email="";

 if (isset($_SESSION['Pseudo'])&& isset($_SESSION['password'])&& isset($_SESSION['Verif_password'])&& isset($_SESSION['email'])
// // && isset($_SESSION['ok_Pseudo'])
// // && isset($_SESSION['verif_pass'])
// // && isset($_SESSION['ok_email'])
  ){

 $Pseudo=$_SESSION['Pseudo'] ;
 $Pseudo_nbr=$_SESSION['min8_speudo'] ;
 $Pseudo_exist=$_SESSION['ok_Pseudo'] ;

$password=$_SESSION['password'];
$password_nbr=$_SESSION['min8_pass'];

$verif_password=$_SESSION['Verif_password'];
$verif_pass=$_SESSION['verif_pass'] ;
 

$email=$_SESSION['email'] ;
$verif_mail=$_SESSION['verif_mail'] ;
$ok_email=$_SESSION['ok_email'];
// echo $ok_email;
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       


          
        <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../style/style.css" >
        <title >Form inscription</title>
</head>

<body>
     
     



<main>
    
 <div class="container ">   
            
        <div class="row">
         
                
               

                         <div  class=" col-lg-offset-3 col-lg-6  col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-1 col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-5  col-xs-offset-1 ">
                         <br>
                         <h4 class="modal-title">Créer un compte</h4>
                         <br>
    <form name="form_inscription" method="POST" id="form_inscription" onsubmit="return validateForm()" action="../service/Insert_form_inscription_service.php" >
                        <div class="form-group">
                            <label for="Pseudo">Pseudo</label>
                            <input id="Pseudo" type="text" class="form-control" name ="Pseudo" placeholder="Votre Pseudo 8 caractères min" value="<?php echo $Pseudo ?>" required  />
                            <span id="spanspeudo"></span>
                            <span><?php echo $Pseudo_exist ?></span>
                            <span><?php echo $Pseudo_nbr ?></span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name ="password" placeholder="Votre Password" required />
                              <span ><?php echo $password_nbr ?></span>
                        </div>
                        <div class="form-group">
                            <label for="Verif_password">Vérification Password</label>
                            <input id="Verif_password" type="password" class="form-control" name ="Verif_password" placeholder="Vérification de votre Password" required />
                            <span id="span_verif_password"></span>
                            <span ><?php echo $verif_pass ?></span>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Votre Email"   value="<?php echo $email ?>"required/>
                            <span id="spanemail"></span>
                            <span ><?php echo $verif_mail ?></span>
                            <span ><?php echo $ok_email ?></span>
                        </div>
                       
                        <div class="form-group">

                            
                            <label for="avatar"> Avatar (Falcultatif jpg.png)</label><br>
                          <label class="btn btn-default ">
                         <input type="file" id="avatar" name="avatar" >
                        </label>
                          
                         
                        </div>
                        <input id="envoi" type="submit" class="btn btn-default" value="Envoyer">
                        </div>
                        
</form>  
                <br>
                        <button class="btn btn-info" onclick="window.open('../index.php')">Annuler</button>              
                        
        </div>


  


 </main> 
 <footer >
 </footer>
  <script src="../Js/jquery-3.2.1.min.js"></script>
    <!--<script src="../Js/Verif_form.js"></script>-->
</body>
   
</html>