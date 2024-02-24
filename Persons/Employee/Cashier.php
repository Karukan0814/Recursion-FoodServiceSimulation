<?php

namespace Persons;

use FoodOrder\FoodOrder;
use Restaurant\Restaurant;
use Invoice\Invoice;



class Cashier extends Employee  {
    protected int $employeeId;
    protected float $salary;


    public function __construct(string $name,int $age,string $address,int $employeeId,float $salary) {
        parent::__construct($name,$age,$address,$employeeId,$salary);
    }


    public function generateOrder(array $categories,Restaurant $restaurant): FoodOrder {
        return new FoodOrder([],0);
    }
    
    public function generateInvoice(FoodOrder $foodorder): Invoice {
        return new Invoice(0,0,0);
    }
}