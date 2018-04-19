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

<form enctype="multipart/form-data" action="data.php" method="POST">

    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

    Pasirinkti faila: <input name="userfile[]" type="file" multiple>
    <input type="submit" value="Send File" />
</form>
<?php
    $readFromFile = 'files.txt';
    if(!empty($readFromFile)){
        $file_data = file($readFromFile);
        foreach($file_data as $readFromFile){
            echo $readFromFile."<br>";
        }
    }

?>


</body>
</html>
