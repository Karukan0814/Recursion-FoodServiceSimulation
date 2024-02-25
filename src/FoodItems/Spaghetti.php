<?php

namespace FoodItems;


class Spaghetti extends FoodItem  {

    const CATEGORY = self::class;

    public function __construct(float $price,string $description) {
        parent::__construct(self::class,$price,$description);

    }
    public static function getCategory(): string {
        return self::CATEGORY;
    }
}