<?php session_start (); ?>
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
    User: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username" id="">
    <br/>
    Password: <input type="password" name="password" id="">
    <br/>
    <input type="submit" value="Prisijungti" name="login">
</form>
<?php
if (!empty($_SESSION['username'])&& !empty($_SESSION['password'])){
    echo "Registration successful!";
    unset($_SESSION['username']);
    unset($_SESSION['password']);
} else {
    echo "Error!";
}
?>
</body>
</html>