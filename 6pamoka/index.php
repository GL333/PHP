<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST">
        Vartotojo vardas:<input type="text" name ="username" /><br/>
        Slaptažodis:<input type="text" name="password" /><br/>
        Epaštas:<input type="email" name="email" /><br/>
        Vardas:<input type="text" name="name" /><br/>
        <input type="submit" name="Submit" /><br/>
    </form>



</body>
</html>