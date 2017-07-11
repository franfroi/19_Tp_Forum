
    
var $form = $('#form_connexion');
var $password=$('#password_connect');

var $spanpassword_connect=$('#spanpassword_connect');
var $email =$('#email_connect');
var $spanemail_connect=$('#spanemail_connect');
window.onload = function() {
  
  $password.focus();
}

 $spanpassword_connect.hide();
 $spanemail_connect.hide();
 
       
 $password.focusout(function(){
                             if( $password.val().length < 8 ){
                            $password.css("border-color","red");
                           $spanpassword_connect.css("color", "red");
                            $spanpassword_connect.show();
                           $password.focus();
                           

                             }    

                          else 
                          {
                              $password.css("border-color","green");
                            $spanpassword_connect.css("color", "green");
                             $spanpassword_connect.hide();
                         }
 }); 

 $email.focusout(function(){
                           var sender_email = $email.val();
   
     
    if (validate_Email(sender_email)) {
    $email.css("border-color","green");
                           $spanemail_connect.hide();
                           $x=0;
                         
    }
    else {
      $email.focus();
       $spanemail_connect.show();
    $email.css("border-color","red");
     $spanemail_connect.css("color", "red");
     $x=1;
     
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


