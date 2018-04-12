<?php
    declare(strict_types = 1);
    function myName(){
        echo "<h1> Giedrius</h1>";
    }

?>


<?php
    
    function printFunction(Bool $varBoolen, String $varString){
        if($varString ==""){
           return false;
        }
        If($varBoolen){
            echo "<h1>".$varString."</h1>";
        } else {
            echo $varString;
        }
    }




?>


<?php
    $smile ="";
    function emo($mood = ""){
        if ($mood == "happy"){
            $GLOBALS ['smile'] = ":-)";
        } elseif($mood == "sad"){
           $GLOBALS ['smile'] = ":-(";
        }else{
            $GLOBALS ['smile'] = ":-|";
        }
    }

myName();
printFunction(false, " is ");
emo("");
echo $smile;
printFunction(false, " today!");

?>