
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form_connect</title>
</head>
<body>
    

 <div class="modal fade" id="form_connnect">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">x</button>
                    <h4 class="modal-title">Créer un compte</h4>
                </div>
                <div class="modal-body">
                    <form name="form_connexion" id="form_connexion" action="test.php">
                       
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password2" type="password" class="form-control" name ="password" placeholder="Votre Password" required /><span id="spanpassword2">Min 8 caractères</span>
                        </div>
                       
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Votre Email" required />
                        <span id="spanemail">Min 8 caractères</span>
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
    <script src="Js/Verif_form_connect.js"></script>
</body>
</html>
   