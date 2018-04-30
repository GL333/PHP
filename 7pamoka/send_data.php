<?php

session_start ();


if(isset($_POST['Submit'])){
    $data = array();
    $data ['type'] = $_POST ['type'];
    storeData($data);
};

if(isset($_POST['Submit2'])){
    $data = array();
    $data ['name'] = $_POST ['name'];
    $data ['parent_id'] = $_POST['select1'];
    storeData2($data);
};


function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "namu_darbas";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}

function storeData($data)
{
    $sql = "INSERT INTO maistas (type) VALUES (:type)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'type' => $data['type']
    ]);
}

function storeData2($data){
    $sql = "INSERT INTO produktai (name, parent_id) VALUES (:name, :parent_id)";
    $sth = getDb()->prepare($sql);
    $sth->execute([
        'name' => $data['name'],
        'parent_id' => $data['parent_id']
        ]);

//$sth->debugDumpParams();
};
header("Location: index.php");
?>