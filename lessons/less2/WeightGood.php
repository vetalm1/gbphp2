<?php
class WeightGood extends Good{
    function finalPrice(){
        return $this->getPrice()*(1-$this->getIncome()/100);
    }  //больше берешь, больше скидка
}