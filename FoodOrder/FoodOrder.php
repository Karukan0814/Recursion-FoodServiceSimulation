<?php
namespace FoodOrder;

class FoodOrder   {
    protected array $items;
    protected int $orderTime;

    public function __construct(array $items,int $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;



    }
}