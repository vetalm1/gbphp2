<?php
abstract class Good 
{
    private $name;
    private $price;
    private $income;
    
    abstract function finalPrice();
    
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function getPrice(){
        return $this->price;
    }
    public function setPrice($price){
        $this->price = $price;
    }
    
    public function getIncome(){
        return $this->income;
    }
    public function setIncome($income){
        $this->income = $income;
    }

    public function show(){
        echo "Товар: ".$this->getName()."<br>".
             "   цена: ".$this->finalPrice()."<br>".
             "   кол-во: ".$this->getIncome()."<br>".
             "   доход: ".$this->getIncome()*$this->finalPrice().
             "<br><hr><br>";
    }
}