<?php
require_once 'vendor/autoload.php';

function getDb(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "namu_darbas";
    $dsn = "mysql:host=$host;dbname=$db";
    return new PDO($dsn, $user, $password);
}

for($i=0;$i<1000;$i++ ){
    $faker = Faker\Factory::create();
    $date = Faker\Provider\DateTime::dateTime();

    $sql = "INSERT INTO comments (author, comment, created_at  ) VALUES (:author, :comment, :created_at )";
    $sth = getDb()->prepare($sql);
    $sth->execute($data = [
        'author' => $faker->name,
        'comment' => $faker->text,
        'created_at' => $date->format('Y-m-d-H-i-s')
    ]);

}





