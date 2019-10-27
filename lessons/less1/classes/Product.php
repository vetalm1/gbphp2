<?php  //Базовый класс
class Product
{
    private $name; // свойство: имя продукта
    private $price; // свойство: цена продукта

    public function __construct($name, $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function getProduct() {  //метод продукта, вывод основных характеристик продукта
        return "<hr><br>
        Наименование: {$this->name}<br>
        Цена: {$this->price}<br>";
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }
}