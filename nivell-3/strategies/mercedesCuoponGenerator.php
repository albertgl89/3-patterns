<?php

require_once './interface/carCouponGenerator.php';

class mercedesCuoponGenerator implements carCouponGenerator {

    
    private $highSeason;
    private $bigStock;
    private $discount = 0;

    function __construct($season, $stock)
    {
        $this->highSeason = $season;
        $this->bigStock = $stock;    
    }
    
    function addSeasonDiscount()
    {
        if (!$this->highSeason){
            $this->discount += 4;
        }
        return $this->discount;
    }

    function addStockDiscount()
    {
        if ($this->bigStock){
            $this->discount += 10;
        }
        return $this->discount;
    }

}