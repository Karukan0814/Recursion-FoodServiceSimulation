<?php
namespace Invoice;

class Invoice   {
    protected float $finalPrice;
    protected int $orderTime;

    protected int $estimatedTimeInMinute;

    public function __construct(float $finalPrice,int $orderTime,int $estimatedTimeInMinute) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinute = $estimatedTimeInMinute;

        



    }
}