<?php

class couponController {
    private $car;

    public function setCar($car){
        $this->car = $car;
    }

    public function applyDiscounts(){
        $discount = $this->car->addSeasonDiscount();
        $discount = $this->car->addStockDiscount();
        return "Get {$discount}% off the price of your new car." . PHP_EOL;
    }
}