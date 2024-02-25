<?php
namespace Invoices;

class Invoice   {
    protected float $finalPrice;
    protected int $orderTime;

    protected int $estimatedTimeInMinute;

    public function __construct(float $finalPrice,int $orderTime,int $estimatedTimeInMinute) {
        $this->finalPrice = $finalPrice;
        $this->orderTime = $orderTime;
        $this->estimatedTimeInMinute = $estimatedTimeInMinute;

        



    }

    public function printInvoice(){
        echo "Final Price: $" . $this->finalPrice . "\n";
        echo "Order Time: " . date("Y-m-d H:i:s", $this->orderTime) . "\n";
    }
}