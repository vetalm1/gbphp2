<?php

class Book extends Product
{

    public $numpages; // свойство наследника: количество страниц

    public function __construct($name, $price, $numpages){
        parent::__construct($name, $price);
        $this->numpages = $numpages;
    }

    public function getProduct(){ // в метод добавлен вывод свойства: - "кол-во страниц"
        $out = parent::getProduct();
        $out .= "Кол-во страниц: {$this->numpages}<br>";
        return $out;
    }

    public function getCpu(){
        return $this->cpu;
    }

}