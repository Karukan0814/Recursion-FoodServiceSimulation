<?php

namespace Persons;
use FoodOrder\FoodOrder;

class Chef extends Employee  {
    protected int $employeeId;
    protected float $salary;


    public function __construct(string $name,int $age,string $address,int $employeeId,float $salary) {
        parent::__construct($name,$age,$address,$employeeId,$salary);
    }


    public function prepareFood(FoodOrder $foodOrder): string {
        return "prepare Food";
    }

}
