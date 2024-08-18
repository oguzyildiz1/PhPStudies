<?php

class Cars
{
    public $model;
    public $brand;
    public $class;
    public $price;
    public $stock;

    public function increase_price($amount)
    {
        $this->price += $amount;
        return $this->price;
    }
}

class Customers
{
    public $name;
    public $budget;
}

$car1 = new Cars();

$car1->model = "A3";
$car1->brand = "Audi";
$car1->price = 1200000;

$last_price = $car1->increase_price(300000);
echo $last_price;
