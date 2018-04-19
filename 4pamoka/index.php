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


<form action="users.php" method="POST">
    User: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="">
    <br/>
    Password: <input type="password" name="password" id="">
    <br/>
    <input type="submit" value="Prisijungti" name="login">
</form>
<?php
if (!empty($_SESSION['username']))
    echo "Welcome back ".$_SESSION['username'];
    unset($_SESSION['username']);
?>

</body>
</html>
