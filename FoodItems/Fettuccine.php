<?php

namespace FoodItems;
class Fettuccine extends FoodItem  {

    const CATEGORY = self::class;

    public function __construct(string $name,float $price,string $description) {
        parent::__construct($name,$price,$description);

    }
    public static function getCategory(): string {
        return self::CATEGORY;
    }

}
