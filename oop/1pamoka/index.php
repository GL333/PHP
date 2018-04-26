<?php
class Person
{
    public $legs = 2;
    function walk(){
        echo "i have: ".$this->legs." legs";
//        $this->step(10);
    }
    public function setLegs(){

    }
    public function getLegs(){
        return $this -> legs;
    }
    function step($count){
        for($i = 0; $i < $count; $i++){
            echo "Steps...".$i."<br/>";
        }
    }
}
$first_person = new Person;
$first_person -> walk();
echo "This person has: ".$first_person->getLegs()." legs";