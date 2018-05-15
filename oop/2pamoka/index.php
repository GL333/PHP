<?php
class ShoppingCart
{
    private $items = [];
    private $date = null;

    public function addItem($item){
        array_push($this->items,$item);
        $this->date = date("Y-m-d h:i:sa");
    }
    public function getItems(){
        return $this->items;
    }

    public function deleteItems($item){
        unset($this->items, $item);
        unset($this->date);
    }

}


$fruit = "Obuolys";
$cart = new ShoppingCart;
$cart ->addItem($fruit);
$cart->getItems();

var_dump($cart);
echo "<br>";

//trynimas:
//$cart->deleteItems($fruit);
//var_dump($cart);
//echo "<br>";



class ShoppingCartItem
{
    public $id = null;
    public $price = null;
    public $quantity = null;
    public $name = null;

}

$cart = new ShoppingCart;
$item = new ShoppingCartItem;
$item->name = "Tarchunas";
$item->price = 1.5;
$item->quantity = 1;
$item->id = 1;

$cart->addItem($item);
var_dump($cart->getItems());
echo "<br>";

class Drink
{
    protected $name = null;

    protected function setDrinkName($value){
        $this->name = $value;
    }

    public function getDrinkName(){
        return $this->name;
    }
}

class Coffee extends Drink
{
    function __construct()
    {
        $this->name = "Coffee";
    }
}

$kava = new Coffee;
echo "My new drink is: ".$kava->getDrinkName()."!";