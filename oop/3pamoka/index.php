<?php
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

$Petras = new Students(666666,"Petras","Petrauskas");
$Petras->save();

class Modules extends DB_connection
{
    public $module_code = null;
    public $module_name = null;

    function __construct($module_code,$module_name)
    {
        $this->module_code = $module_code;
        $this->module_name = $module_name;
    }
    public function save(){
        $sql = "INSERT INTO modules (module_code, module_name) VALUES (:module_code, :module_name)";
        $sth = $this->getDb()->prepare($sql);
        $sth->execute($data = [
            'module_code' => $this->module_code,
            'module_name' => $this->module_name
        ]);
    }
}

$modulis = new Modules(111111, "Strategija");
$modulis->save();




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

$mark = new Marks(666666,111111,99);
$mark->save();



