<?php
require_once("function.php");
var_dump($_POST);

if($_POST){
    $password=$_POST['password'];
    if (empty($password)){
        echo"</br> pas de Nom";
    }else{
        echo "</br>Mon Nom est: ".$password;
    }
    }
 //la validation 
 $passwordIsValid=passwordIsValid($_POST['Name']);
 echo'</br>';
 var_dump($passwordIsValid);
 if (!$passwordIsValid['isValid']){
    
 }
 $saltpassword= addSalt($_POST['password']);
 var_dump($saltName);
 $encodepassword = encodepassword(($saltpassword));
 echo'</br>';
 echo $encodepassword;
?>
<a href="./index.php">retour</a>