<?php
session_start();
echo "<a href = index.php>Atgal</a>"."<br/>";
echo $_POST['username']."<br/>";
echo $_POST['password']."<br/>";
$_SESSION['username'] = $_POST['username'];





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
