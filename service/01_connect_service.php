 <?php 

 
 //connection à la base
$connexion= new PDO('mysql:host=localhost;dbname=tp;charset=UTF8','root','');

$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connexion->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 




?>





