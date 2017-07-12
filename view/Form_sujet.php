<?php
/*
 * Alfonso: le session_start ne doit être que dans l'index.php
 * ET dans les services.
 * */
 
session_start();
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
   // echo $id;
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
        <title >Form sujet</title>
</head>

<body>
     
     



<main>
    
 <div class="container ">   
            
        <div class="row">
          <div  class=" col-lg-offset-3 col-lg-6  col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-1 col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-5  col-xs-offset-1 ">
                         <br>
                         <h4 class="modal-title">Créer un sujet</h4>
                         <br>
                        <form name="form_inscription" method="POST" id="form_sujet"  action="../service/01_form_insert/Insert_form_sujet_service.php" >
                        
                        <div class="form-group">
                            <label for="Titre">Titre du sujet</label>
                            <input id="Titre" type="text" class="form-control" name ="Titre"  required  />
                         </div>

                        <input id="envoi" type="submit" class="btn btn-default" value="Envoyer">
                        </form>  
                          <br> 

              
                        <button class="btn btn-info" onclick="window.open('../index.php')">Annuler</button>              
                        
        </div>
    </div>      
</div>
  


 </main> 
 <footer >
 </footer>
  <script src="../Js/jquery-3.2.1.min.js"></script>
    <!--<script src="../Js/Verif_form.js"></script>-->
</body>
   
</html>