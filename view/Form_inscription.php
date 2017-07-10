
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_inscription</title>
</head>
<body>
    

 <div class="modal fade" id="form_suggestion">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Créer un compte</h4>
                </div>
                <div class="modal-body">
                    <form name="form_inscription" id="form_inscription" action="test.php">
                        <div class="form-group">
                            <label for="Pseudo">Pseudo</label>
                            <input id="Pseudo" type="text" class="form-control" name ="Pseudo" placeholder="Votre Pseudo 8 caractères min" autofocus /><span id="spanspeudo">Min 8 caractères</span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name ="password" placeholder="Votre Password" required />
                            <span id="spanpassword">Min 8 caractères</span>
                        </div>
                        <div class="form-group">
                            <label for="Verif_password">Vérification Password</label>
                            <input id="Verif_password" type="password" class="form-control" name ="Verif_password" placeholder="Vérification de votre Password" required/>
                            <p id="span_verif_password">Password non identique</p>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Votre Email" /><span id="spanemail ">Email non valide</span>
                        </div>
                       
                        <div class="form-group">

                            
                            <label for="avatar"> Avatar (Falcultatif jpg.png)</label><br>
                          <label class="btn btn-default ">
                         <input type="file" id="avatar" name="avatar" >
                        </label>
                          
                           
                        </div>
                        <input type="submit" class="btn btn-default" value="Envoyer">
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

    <script src="Js/jquery-3.2.1.min.js"></script>
    <script src="Js/Verif_form.js"></script>
</body>
</html>
   