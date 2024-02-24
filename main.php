<?php
abstract class Person {
    protected string $name;
    protected int $age;
    protected string $address;



    public function __construct(string $name,int $age,string $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;

    }

}


class Customer extends Person  {
    protected string $interestedCategory;

    public function __construct(string $name,int $age,string $address,array $interestedCategory) {
        parent::__construct($name,$age,$address);
        $this->interestedCategory = $interestedCategory;

    }

    public function order(Restaurant $restaurant,array $category): Invoice {
        return new Invoice(0,0,0);
    }

}


class Employee extends Person  {
    protected int $employeeId;
    protected float $salary;


    public function __construct(string $name,int $age,string $address,int $employeeId,float $salary) {
        parent::__construct($name,$age,$address);
        $this->employeeId = $employeeId;
        $this->salary = $salary;


    }

}
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


class Restaurant  {
    protected array $menu;
    protected array $employees;


    public function __construct(array $menu,array $employees) {
        $this->menu = $menu;
        $this->employees = $employees;

    }


    public function order(array $categories): Invoice {
        return new Invoice(0,0,0);
    }
    
}



abstract class FoodItem {
    protected string $name;
    protected float $price;
    protected string $description;



    public function __construct(string $name,float $price,string $description) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;

    }

    public function getCategory(): string {
        return "Category is...";
    }

}


class HawaiianPizza extends FoodItem  {

    public function __construct(string $name,float $price,string $description) {
        parent::__construct($name,$price,$description);

    }

}

class Spaghetti extends FoodItem  {

    public function __construct(string $name,float $price,string $description) {
        parent::__construct($name,$price,$description);

    }

}
class CheeseBurger extends FoodItem  {

    public function __construct(string $name,float $price,string $description) {
        parent::__construct($name,$price,$description);

    }

}
class Fettuccine extends FoodItem  {

    public function __construct(string $name,float $price,string $description) {
        parent::__construct($name,$price,$description);

    }

}

class FoodOrder   {
    protected array $items;
    protected int $orderTime;

    public function __construct(array $items,int $orderTime) {
        $this->items = $items;
        $this->orderTime = $orderTime;



    }
}

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