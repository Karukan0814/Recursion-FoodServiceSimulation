<?php

namespace FoodItems;

abstract class FoodItem {
    protected string $category;
    protected float $price;
    protected string $description;



    public function __construct(string $category,float $price,string $description) {
        $this->category = $category;

        $this->price = $price;
        $this->description = $description;

    }

    abstract public static function getCategory():string;

}