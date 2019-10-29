<?php
class DigitalGood extends Good{
    function finalPrice(){
        return $this->getPrice()*2;
    }
}