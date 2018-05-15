<?php
namespace Modules;
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





