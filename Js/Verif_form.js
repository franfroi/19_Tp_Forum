
    
var $form = $('#form_inscription');
var $Pseudo=$('#Pseudo');
var $password=$('#password');
var $Verif_password=$('#Verif_password');
var $spanspeudo=$('#spanspeudo');
var $spanpassword=$('#spanpassword');
                            
$Pseudo.focusout(function(){
                            if( $Pseudo.val().length < 8 ){
                            $Pseudo.css("border-color","red");
                            $spanspeudo.css("color", "red");
                             }    

                          else 
                          {
                              $Pseudo.css("border-color","green");
                              $spanspeudo.css("color", "green");
                            
                         }
 }); 


 $password.focusout(function(){
                             if( $password.val().length < 8 ){
                            $password.css("border-color","red");
                           $spanpassword.css("color", "red");
                             }    

                          else 
                          {
                              $password.css("border-color","green");
                            $spanpassword.css("color", "green");
                         }
 }); 

 $Verif_password.focusout(function(){
                            if($Verif_password.val()!=$password.val()){
                            $Verif_password.css("border-color","red");
                            $Verif_password.attr("placeholder", "Password non identique");
                             }    

                          else 
                          {
                              $Verif_password.css("border-color","green");
                            
                         }
 }); 
   