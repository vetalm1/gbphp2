<?php
class PicesGood extends Good{
    function finalPrice(){
        return $this->getPrice();
    }
}