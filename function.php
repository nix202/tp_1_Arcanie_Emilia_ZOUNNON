<?php
function passwordIsValid($passwordToValid){
    $length = strlen ($passwordToValid);
    $responses=[
        'isValid'=>true,
        'msg'=>''];
        if ($length<6)
{
    $responses==[
        'isValid'=>false,
        'msg'=>'weak password'];
    } elseif ($length> 10){
            $responses=[
                'isValid'=>false,
                'msg'=> 'strong password'
            ];
        }
        return $responses;
    
   
    }
    function addSalt($passwordToSalt){ //cette methode permet de proteger les donners personnelles d'un client. c'est de l'emcriptage de donner.
        $salt = 'unPeuDeSel123';
        $salt_password = $salt.$passwordToSalt.$salt;
        return $salt_password;
    }


    function encodepassword ($salt_password){
        $encodepassword = sha1($salt_password);
        return  $encodepassword;
    }
?>;