<?php
$user = array(
    'username' => "GL333",
    'password' => "123"
);
$vartotojas = "GL333";
$slaptazodis = "123";


function checkUser($arr,$users,$pass){




    if($arr['username']== $users && $arr['password']== $pass){
        return true;
    } else {
        return false;
    }
}
var_dump(checkUser($user,$vartotojas,$slaptazodis));