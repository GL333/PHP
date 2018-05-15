<?php
namespace Marks;
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

class Marks extends DB_connection
{
    public $student_no = null;
    public $module_code = null;
    public $mark = null;

    function __construct($student_no, $module_code, $mark)
    {
        $this->student_no = $student_no;
        $this->module_code = $module_code;
        $this->mark = $mark;
    }

    public function save()
    {
        $sql = "INSERT INTO marks (student_no, module_code, mark) VALUES (:student_no, :module_code, :mark)";
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($data = [
            'student_no' => $this->student_no,
            'module_code' => $this->module_code,
            'mark' => $this->mark
        ]);
    }
}