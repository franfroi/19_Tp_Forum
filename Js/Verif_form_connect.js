
    
var $form = $('#form_connexion');
var $password2=$('#password2');

var $spanpassword=$('#spanpassword2');
window.onload = function() {
  
  $password2.focus();
}

       
 $password2.focusout(function(){
                             if( $password2.val().length < 8 ){
                            $password2.css("border-color","red");
                           $spanpassword.css("color", "red");
                           $password2.focus();
                           

                             }    

                          else 
                          {
                              $password2.css("border-color","green");
                            $spanpassword.css("color", "green");
                         }
 }); 

 
   function validate_form( )
{
    if(  $Pseudo.val().length < 8  ) { $Pseudo.focus(); return false; }
     if(  $password2.val().length < 8  ) { $password2.focus(); return false; }
      if(  $Verif_password.val().length < 8  ) { $Verif_passwordseudo.focus(); return false; }
       
return true; 
}

$form.submit(function(event){

 event.preventDefault();
    validate_form();
});


