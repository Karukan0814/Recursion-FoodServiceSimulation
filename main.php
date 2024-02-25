
<?php

spl_autoload_extensions(".php");
spl_autoload_register(function ($class){
    $base_dir = __DIR__. '/src/';
    $file = $base_dir.str_replace('\\', '/', $class).'.php';
    if(file_exists(($file))){
        require $file;
    }
});




// レストランの saizeriya は、Chef の Invah、Cashier の Nadia を雇っています。
// saizeriya のメニューは CheesBurger、Fettuccine、HwaiianPizza、Spaghetti があります。
// 客である Tom は、Margherita x 1, CheseeBurger x 2, Spaghetti x 1 を食べたく saizeriya でオーダーしました。

$Invah= new Persons\Employees\Chef("Invah",40,"Invah's address",1,100);
$Nadia= new Persons\Employees\Cashier("Nadia",30,"Nadia's address",2,200);
$CheeseBurger=new FoodItems\CheeseBurger(500.5,"oishii cheese");
$Fettuccine=new FoodItems\Fettuccine(300,"special");
$HawaiianPizza= new FoodItems\HawaiianPizza(200,"originally from waikiki");
$Spaghetti= new FoodItems\Spaghetti(600,"we can serve all kinds of spaghetti");



$saizeriya = new Restaurants\Restaurant([$CheeseBurger,$Fettuccine,$HawaiianPizza,$Spaghetti],[$Invah,$Nadia]);


// 顧客の食べたい　食べ物の名前＝＞個数　のマップ
$interestedTasteMap=[

    "Margherita"=> 1,
    "CheseeBurger"=> 2,
    "Spaghetti"=> 1,

];

$Tom=new Persons\Customers\Customer("Tom",33,"Tom's address is in W.C.",$interestedTasteMap);
$invoice=$Tom->order($saizeriya);
$invoice->printInvoice();