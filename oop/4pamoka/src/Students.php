<?php
namespace Students;
use PDO;

abstract class DB_connection
{
    public function getDb(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $db = "namu_darbas";
        $dsn = "mysql:host=$host;dbname=$db";
        return new PDO($dsn, $user, $password);
    }
}

class Students extends DB_connection
{
    public $student_no = null;
    public $surname = null;
    public $forename = null;

    public function __construct($student_no,$surname,$forename)
    {
        $this->student_no = $student_no;
        $this->surname = $surname;
        $this->forename = $forename;
    }

    public function save(){
        $sql = "INSERT INTO students (student_no,surname,forename) VALUES (:student_no, :surname, :forename) ";
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($data = [
            'student_no' => $this->student_no,
            'surname' => $this->surname,
            'forename' => $this->forename
        ]);
    }
}
