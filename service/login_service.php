<?php
if (!empty($_POST['user']) && !empty($_POST['description'])){

$user=$_POST['user'];
$description=$_POST['description'];
$ok='ok';





header("location:../index.php?page=Form&&user=$user&&description=$description&&success=$ok");
}
else{header("location:../index.php?page=Form&&user=success='false'");}
?>