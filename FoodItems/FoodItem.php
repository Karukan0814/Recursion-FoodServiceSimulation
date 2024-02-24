<?php

namespace FoodItems;

abstract class FoodItem {
    protected string $name;
    protected float $price;
    protected string $description;



    public function __construct(string $name,float $price,string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;

    }

    abstract public static function getCategory():string;

}