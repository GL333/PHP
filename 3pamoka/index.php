<?php
$months = [
     1 =>  "Sausis",
     2 =>  "Vasaris",
     3 =>  "Kovas",
     4 =>  "Balandis",
     5 =>  "Geguze",
     6 =>  "Birzelis",
     7 =>  "Liepa",
     8 =>  "Rugpjutis",
     9 =>  "Rugsejis",
    10 =>  "Spalis",
    11 =>  "Lapkritis",
    12 =>  "Gruodis",
    ];

echo "Metuose yra sie menesiai:<br>";
echo "<ul>";
foreach($months as $index => $val){
    echo "<li>".$index.". ".$val."</li><br>";
}
echo "</ul><br><br>";


   $shopping_cart = [
       [
           'type' => 'vegetables',
           'name' => 'potato',
           'quantity' => '10',
           'price' => '1.0'
       ],
       [
           'type' => 'vegetables',
           'name' => 'onion',
           'quantity' => '5',
           'price' => '0.5'
       ],
       [
           'type' => 'vegetables',
           'name' => 'cucumber',
           'quantity' => '2',
           'price' => '1.2'
       ],
        [
           'type' => 'fruits',
           'name' => 'banana',
           'quantity' => '2',
           'price' => '1.0'
        ],
        [
           'type' => 'fruits',
           'name' => 'apple',
           'quantity' => '3',
           'price' => '1.2'
        ]
   ];


echo"Vaisiai: <br/>";
foreach($shopping_cart as $index => $val){
    foreach($val as $index2 => $val2){
        if($val2 === 'fruits'){
            $short = $shopping_cart[$index];
            echo $short['name']." Kaina: ".$short['quantity'] * $short['price']."<br/>";
        } else {
            continue;
        }
    }
    unset($val2);
}
unset($val);

echo"<br/>Darzoves: <br/>";
foreach($shopping_cart as $index => $val){
    foreach($val as $index2 => $val2){
        if($val2 === 'vegetables'){
            $short = $shopping_cart[$index];
            echo $short['name']." Kaina: ".$short['quantity'] * $short['price']."<br/>";
        } else {
            continue;
        }
    }
    unset($val2);
}
unset($val);

echo"<br/>";

$users = array('Jonas', 'Petras', 'Rasa', 'Tadas');
$emails = array();
function checkArray($a){
    if(count($a)==0){
        echo "Array is empty!";
    } else{
        for($i=0;$i<count($a);$i++){

            if($i== count($a)-1){
                if($a[$i]!==''){
                    echo $a[$i];
                }
            } else {
                continue;
            }
        }
    }


}
checkArray($users);

