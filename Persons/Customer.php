<?php

namespace Persons;

use Restaurant\Restaurant;
use Invoice\Invoice;


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