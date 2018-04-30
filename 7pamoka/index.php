<?php session_start(); ?>
<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "namu_darbas";
$connect = mysqli_connect($host, $user, $password, $db);
$query = "SELECT * FROM maistas";
$result = mysqli_query($connect, $query);

?>

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

<form name ="maistas" action="send_data.php" method="POST">
    Maisto rūšis :<input type="text" name ="type" /><br/>
    <input type="submit" name="Submit" /><br/>
</form>


<form name ="produktai" action="send_data.php" method="POST">
    Produktas :<input type="text" name ="name" /><br/>
    Išsirinkite maisto rūšį: <select name="select1">
    <?php while ($row = mysqli_fetch_array($result)):;?>
        <option value ="<?php echo $row[0]; ?>" ><?php echo $row[1];?></option>
        <?php endwhile;?>
    </select>
    <input type="submit" name="Submit2" /><br/>
</form>




</body>
</html>