<?php

 $logout="";
  $connect='<li>'.'<a href="view/Form_connexion.php"  >'.'Se connecter'.'</a>'.'</li>';
 $compte='<li>'.'<a href="view/Form_inscription.php"  >'.'Créer compte'.'</a>'.'</li>';
 $creersujet="";
session_start();
if(isset($_SESSION['id'])){
    $id=$_SESSION['id'];
     $logout='<li>'.'<a href="model/logout.php"  >'.'Se deconnecter'.'</a>'.'</li>';
     $connect="";
  $compte="";
$creersujet='<input id="envoi" type="submit" class="btn btn-info" value="Créér un sujet">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      

          
        <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.css">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="style/style.css" >

        <title >Forum</title>
</head>

<body>
     
     <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation"> 
         	<div class="navbar-header">   
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			        
           
		</div>
        <div class="collapse navbar-collapse  ">
            <ul class="nav navbar-nav ">
                    <li ><a href="" >Accueil</a></li>
                    <li><a href="#forum" >Forum</a></li>
                         <?php echo $compte;?>
                         <?php echo $connect;?>
                         <?php echo $logout;?>
                    <li><a href="#contact" >Contact</a></li>
                    
            </ul>
        </div>
        
	</nav>



<main>
    
 <div class="container">   
            
        <div class="row">
         
                 <div class=" nopadding col-lg-3 col-md-3 col-sm-1 col-xs-1 ">
                        
                        <div class="libelle">
                        
                       <form name="form_create_sujet" method="POST" id="form_create_sujet"  action="view/Form_sujet.php" >
                         <?php echo $creersujet?>
                        </form> 
                        </div> 
                       
                 </div>
               

                             <div  class=" col-lg-offset-3 col-lg-6  col-lg-offset-3 col-md-offset-3 col-md-6 col-md-offset-3 col-sm-offset-1 col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-5  col-xs-offset-1 ">
                             <div class="libelle">
                        <h3 id="FORUM">Sujet</h3>
                        </div> 
                             <div class="libelle" >  
                                                         
                                 <h3 id="FORUM">  
                                 ndnfdnd
                                 </h3>
                               </div> 
                      
                             </div>


  


            </div>
</div>
 </main> 
 <footer >
 </footer>
</body>
   
</html>