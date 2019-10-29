<?php

class Computer extends Product
{

    public $cpu; // свойство наследника: процессор

    public function __construct($name, $price, $cpu){
        parent::__construct($name, $price);
        $this->cpu = $cpu;
    }

    public function getProduct(){ // в метод добавлен вывод свойства: - "Процессор"
        $out = parent::getProduct();
        $out .= "Процессор: {$this->cpu}<br>";
        return $out;
    }

    public function getCpu(){
        return $this->cpu;
    }

}