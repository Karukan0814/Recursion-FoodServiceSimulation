
<?php
namespace Restaurant;
use Invoice\Invoice;

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