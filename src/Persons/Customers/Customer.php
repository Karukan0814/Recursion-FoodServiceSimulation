<?php
namespace Persons\Customers;

use Invoices\Invoice;
use Restaurants\Restaurant;
use Persons\Person;

class Customer extends Person  {
    protected array $interestedCategory;//食べたい食べ物のカテゴリ名(string)とその個数（int）のマップ

    public function __construct(string $name,int $age,string $address,array $interestedCategory) {
        parent::__construct($name,$age,$address);
        $this->interestedCategory = $interestedCategory;

    }
    public function getInterestedCategory(): array {
        return $this->interestedCategory;
    }

    public function order(Restaurant $restaurant): Invoice {
        $orderedItems=self::interestedCategories($restaurant);
        $finalPrice=0;
        $menu=$restaurant->getMenu();
        foreach($orderedItems as $category => $num){
            foreach($menu as $menuItem){
                if($menuItem->getCategory()===$category){
                    $finalPrice+= $menuItem->getPrice()*$num;
                    break;
                }
            }
        }

        $orderTime=time();
        $estimatedTimeInMinute=0;
        return new Invoice($finalPrice,$orderTime,$estimatedTimeInMinute);
    }

    // Customer には interestedCategories() という関数があり、Restaurant を引数に取り、
    // そのレストランが持っている自分が興味のある食品カテゴリのリストを返します。
    // この関数の出力は order() 関数に渡され、レジはそのカテゴリに合う FoodItems を選ぶことができます。

    private function interestedCategories(Restaurant $restaurant):array{
        $menu=$restaurant->getMenu(); //menuはFoodItems[]型
        $orderedItems=[];
        foreach($this->interestedCategory as $category => $num){
            foreach($menu as $menuItem){
                if ($menuItem->getCategory()===$category){
                    $orderedItems[$category]=$num;
                    break;
                }
            }

        }
        return $orderedItems;
    }

}