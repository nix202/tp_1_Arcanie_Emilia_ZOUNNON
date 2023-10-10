
<?php
require_once("function.php");
var_dump($_POST);

if($_POST){
    $password=$_POST['password'];
    if (empty($password)){
        echo"</br> set your password";
    }else{
        echo "</br> new password is: ".$password;
    }
    }
 //la validation 
 $passwordIsValid=passwordIsValid($_POST['password']);
 echo'</br>';
 var_dump($passwordIsValid);
 if (!$passwordIsValid['isValid']){
    
 }
 $salt_password= addSalt($_POST['password']);
 var_dump($salt_password);
 $encodepassword = encodepassword(($salt_password));
 echo'</br>';
 echo $encodepassword;
?>
<a href="./index.php">retour</a>