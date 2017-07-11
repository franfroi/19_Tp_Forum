
    
var $envoi = $('#envoi');
var $form = $('#form_inscription');
var $Pseudo=$('#Pseudo');
var $password=$('#password');
var $Verif_password=$('#Verif_password');
var $email =$('#email');
var $spanspeudo=$('#spanspeudo');
var $spanpassword=$('#spanpassword');
var $spanemail=$('#spanemail');
var $span_verif_password=$('#span_verif_password');
var $x=0;
window.onload = function() {
  $Pseudo.focus();
}
 $spanspeudo.hide();
 $spanpassword.hide();
 $spanemail.hide();
 $span_verif_password.hide();

 $form.submit(function(event){
                             if( $Pseudo.val().length < 8 ){
                               
                            $Pseudo.css("border-color","red");
                           $spanspeudo.css("color", "red");
                           $spanspeudo.show();
                           $Pseudo.focus();
                           

                             }    

                          else 
                          {
                              $Pseudo.css("border-color","green");
                             $spanspeudo.hide();
                         }



       
 
                             if( $password.val().length < 8 ){

                            $password.css("border-color","red");
                             $spanpassword.show();
                           $spanpassword.css("color", "red");
                           $password.focus();
                           

                             }    

                          else 
                          { $spanpassword.hide();
                              $password.css("border-color","green");
                            
                         }



                            if($Verif_password.val()!=$password.val()){
                              $span_verif_password.show();
                            $Verif_password.css("border-color","red");
                             $span_verif_password.css("color", "red");
                            $Verif_password.focus();
                             }    

                          else 
                          {
                              $Verif_password.css("border-color","green");
                                $span_verif_password.hide();
                            
                         }
  

   

                           var sender_email = $email.val();
   
     
    if (validate_Email(sender_email)) {
    $email.css("border-color","green");
                           $spanemail.hide();
                           $x=0;
                         
    }
    else {
      $email.focus();
       $spanemail.show();
    $email.css("border-color","red");
     $spanemail.css("color", "red");
     $x=1;
     
    }
                         
  

   function validateForm()
{
  
  
    if(  $Pseudo.val().length < 8  ) { $Pseudo.focus(); return false; }
      if(  $password.val().length < 8  ) { $password.focus(); return false; }
      if(  $Verif_password.val().length < 8  ) { $Verif_password.focus(); return false; }
      if(  $x==1) { $email.focus(); return false; }

}




   



});
 
 // Function that validates email address through a regular expression.
    function validate_Email(sender_email) {
    var expression = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if (expression.test(sender_email)) {
    return true;
    }
    else {
    return false;
    }
    }