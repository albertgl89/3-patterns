<?php

//Voleu que els seus galls dindis es comportin com ànecs, de manera que ha d'aplicar el adapter pattern.
//En el mateix arxiu, escriviu una classe anomenada TurkeyAdapter i assegureu-vos que tingui en compte el següent:

//La traducció de l'quack entre classes és fàcil: simplement cridi al mètode Gobble quan sigui apropiat.

//Encara que ambdues classes tenen un mètode fly, els galls dindis només poden volar a ratxes curtes,
// no poden volar llargues distàncies com els ànecs. Per mapejar entre el mètode fly d'un ànec i el mètode de l'gall dindi, 
// ha de trucar a l'mètode fly de el gall dindi cinc vegades per compensar-ho.

class Duck
{

    public function quack()
    {
        echo "Quack \n";
    }

    public function fly()
    {
        echo "I'm flying \n";
    }
}

class Turkey
{

    public function gobble()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter {

    private Turkey $turkey;

    public function __construct(Turkey $turkey){
        $this->turkey = $turkey;
    }

    public function quack(){
        return $this->turkey->gobble();
    }

    public function fly(){
        for ($i = 0; $i < 5; $i++){
            $this->turkey->fly();
        }
    }
}
