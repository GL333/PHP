<?php
require "vendor/autoload.php";





$Ausra = new Students\Students(888888,"Ausra","Ausraite");
$Ausra->save();

$modulis = new Modules\Modules(222222, "Daile");
$modulis->save();

$mark = new Marks\Marks(888888,222222,98);
$mark->save();



