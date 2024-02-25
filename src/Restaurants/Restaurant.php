<?php
namespace Restaurants;

class Restaurant{
    protected array $menu = [];
    protected array $employees = [];

    public function __construct(array $items, array $employees){
        $this->menu = $items;
        $this->employees = $employees;
    }

    public function getMenu(): array{
        return $this->menu;
    }

    public function getEmployees(): array{
        return $this->employees;
    }
}