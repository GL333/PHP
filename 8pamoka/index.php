<?php


function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "namu_darbas";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}


$sql = "SELECT ms.mark, md.module_name, st.surname, st.forename  FROM students st LEFT JOIN marks ms ON ms.student_no = st.student_no LEFT JOIN modules md on md.module_code = ms.module_code";

$res1 = getDb()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
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
<table style="border:1px solid black">
    <tr>
        <th style="border:1px solid black;">Mark</th>
        <th style="border:1px solid black;">Module_name</th>
        <th style="border:1px solid black;">Forename</th>
        <th style="border:1px solid black;">Surname</th>
    </tr>
    <?php

    foreach ($res1 as $key => $value){


        echo "<tr>";
        echo "<td style=\"border:1px solid\">" . $value['mark'] . "</td>";
        echo "<td style=\"border:1px solid\">" . $value['module_name'] . "</td>";
        echo "<td style=\"border:1px solid\">" . $value['forename'] . "</td>";
        echo "<td style=\"border:1px solid\">" . $value['surname'] . "</td>";
        echo "</tr>";


    };
    ?>
</table>



<h2>Search students :</h2>
<form action="" method="POST">
    <input type="text" name="keyword">
    <input type="submit" value="Search...">
</form>
<?php
//search form
if (isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    $sql = "SELECT ms.mark, md.module_name, st.surname, st.forename  FROM students st LEFT JOIN marks ms ON ms.student_no = st.student_no LEFT JOIN modules md on md.module_code = ms.module_code
        WHERE module_name LIKE :keyword or surname LIKE :keyword or forename LIKE :keyword";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'keyword' => "%" . $keyword . "%"
    ]);
    $res = $sth->fetchAll(PDO::FETCH_ASSOC);


    if (count($res) > 0 && !empty($_POST['keyword'])){ ?>
        <h1>Results: </h1>
        <?php
        echo "<table style='border: 1px solid blue'>";
        foreach ($res as $key => $value):
            echo "<tr>";
            echo "<td style=\"border:1px solid aqua\">" . $value['mark'] . "</td>";
    echo "<td style=\"border:1px solid aqua\">" . $value['module_name'] . "</td>";
    echo "<td style=\"border:1px solid aqua\">" . $value['forename'] . "</td>";
    echo "<td style=\"border:1px solid aqua\">" . $value['surname'] . "</td>";
    echo "</tr>";
        endforeach;
        echo "</table>";
        ?>

    <?php };?>


<?php }; ?>




















</body>
</html>
