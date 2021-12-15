<?php

//Refactorizar la classe Tigger en un Singleton considerant els següents punts:

//Definiu el mètode getInstance () que no tingui arguments. Aquesta funció és responsable de crear una instància de la classe Tigger només una vegada i tornar aquesta única instància cada vegada que es crida.
//Imprimeix en pantalla múltiples vegades el rugit de Tigger.
//Afegeix un mètode getCounter () que retorni el nombre de vegades que Tigger ha realitzat rugits.

class Tigger {

    private static Tigger $tigger;
    private static $counter = 0;

    private function __construct() {
            echo "Building character..." . PHP_EOL;
    }

    public function roar() {
            echo "Grrr!" . PHP_EOL;
            self::$counter++;
    }

    public static function getInstance(){
        if (!isset(self::$tigger)){
            self::$tigger = new static();

        }
        return self::$tigger;
    }

    public function getCounter(){
        echo "Tigger ha rugit un total de " . Tigger::$counter . " vegades!" . PHP_EOL;
        return;
    }

}

//Tests. getInstance() - Comprovem que es crea una sola instància de l'objecte Tigger
$t1 = Tigger::getInstance();
$t2 = Tigger::getInstance();
if($t1 === $t2){
    echo "Només hi ha un sol Tigger" . PHP_EOL;
} else {
    echo "Hi ha dos Tiggers diferents" . PHP_EOL;
}

//Usem les dues variables que referencien la instància única de Tigger per seguir comprovant que es tracta en efecte del mateix objecte
//Rugits de Tigger (des de la referència 1)
$limit = rand(1,20);
echo "Rugint ". $limit . " vegades..." . PHP_EOL;
for ($i = 0; $i < $limit; $i++){
    $t1->roar();
}

//Recompte de rugits fins ara (des de la referència 2)
$t2->getCounter();

//Rugits de Tigger (des de la referència 2)
$limit = rand(1,20);
echo "Rugint ". $limit . " vegades..." . PHP_EOL;
for ($i = 0; $i < $limit; $i++){
    $t2->roar();
}

//Recompte de rugits fins ara (des de la referència 1)
$t1->getCounter();