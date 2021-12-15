<?php

namespace Exercici3;

/**
 * Penseu en la següent funció simple amb el nom couponGenerator que genera diferents cupons per a diferents tipus d'automòbils.
 * Per a aquells que estan interessats en comprar un BMW ofereix un cupó diferent a el d'aquells que estiguin interessats 
 * en comprar un Mercedes. 
 * 
 * El cupó té en compte els següents factors per ponderar la taxa de descompte:
 * 
 * - És possible que desitgem oferir un descompte durant una recessió en la compra d'automòbils. 
 * En el nostre codi se li denomina a aquest atribut com isHighSeason. 
 * 
 * - És possible que desitgem oferir un descompte quan 
 * l'estoc d'automòbils a la venda sigui massa gran. En el nostre codi se li denomina a aquest atribut com bigStock.
 * 
 * Segons les consideracions anteriors necessitem utilitzar el patró strategy
 * perquè donada la marca d'un automòbil, el nostre programa calculi el descompte.
 * 
 * Cal crear una funció anomenada addSeasonDiscount que afegeix un descompte quan les vendes baixen.
 * Cal crear una funció anomenada addStockDiscount que afegeix un descompte quan l'inventari és massa gran.
 * Serà necessari implementar les classes bmwCuoponGenerator i mercedesCuoponGenerator.
 * És necessari crear la interfície carCouponGenerator.
 * 
 * Imprimeix per pantalla el resultat de l'cupó per a les dues marques de cotxe (BMW i Mercedes).
 * 
 */

function cupounGenerator($car)
{

    $discount = 0;
    $isHighSeason = false;
    $bigStock = true;

    if ($car == "bmw") {
        if (!$isHighSeason) {
            $discount += 5;
        }
        if ($bigStock) {
            $discount += 7;
        }
    } else if ($car == "mercedes") {
        if (!$isHighSeason) {
            $discount += 4;
        }
        if ($bigStock) {
            $discount += 10;
        }
    }
    return $cupoun = "Get {$discount}% off the price of your new car.";
}
echo cupounGenerator("bmw");
