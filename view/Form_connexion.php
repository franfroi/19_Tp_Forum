<?php 


session_start();


$password_nbr="";
$verif_mail="";
$email="";


 if (isset($_SESSION['password'])&& isset($_SESSION['email'])
// // && isset($_SESSION['ok_Pseudo'])
// // && isset($_SESSION['verif_pass'])
// // && isset($_SESSION['ok_email'])
  ){

$password_nbr=$_SESSION['min8_pass'];
$email=$_SESSION['email'] ;
$verif_mail=$_SESSION['verif_mail'] ;

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       <link rel="stylesheet" href="../style/style.css" >


          
        <link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/css/font-awesome.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <title >Form connect</title>
</head>

<body>
     
     



<main>
    
 <div class="container ">   
            
        <div class="row">
         
                
               

                         <div  class=" col-lg-offset-3 col-lg-6  col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-1 col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-5  col-xs-offset-1 ">
                         <br>
                         <h4 class="modal-title">Connexion</h4>
                         <br>
                    <form name="form_inscription" method="POST" id="form_connexion" action="../service/connect_service.php">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password_connect" type="password" class="form-control" name ="password" placeholder="Votre Password" autofocus required />
                            <span id="spanpassword_connect"></span>
                            <span ><?php echo $password_nbr ?></span>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">Email</label>
                            
                            <input id="email_connect" type="text" class="form-control" name="email" placeholder="Votre Email" required />
                        <span id="spanemail_connect"></span>
                        <span ><?php echo $verif_mail ?></span>
                        </div>
                        <input type="submit" class="btn btn-default" value="Envoyer">
                        </div>
                        
</form>  
                <br>
                        <button class="btn btn-info" onclick="window.open('../index.php')">Annuler</button>              
                        
        </div>


  


 </main> 
 <footer >
 </footer>
 <script src="../Js/jquery-3.2.1.min.js"></script>
    <!--<script src="../Js/Verif_form_connect.js"></script>-->
</body>
   
</html>