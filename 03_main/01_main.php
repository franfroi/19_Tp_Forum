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
               

               <div  class="nopadding  col-lg-9  col-md-9  col-sm-offset-1 col-sm-5 col-sm-offset-1 col-xs-offset-1 col-xs-5  col-xs-offset-1 ">
                    <div>
                        <h3 id="FORUM">Sujet</h3>
                    </div> 
                    
                        <div>  
                        <?php include ("view/01_affichage/affichage_sujet.php");?>
                        </div> 
                </div>

        </div>
</div>
</main> 